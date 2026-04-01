<?php

namespace AllYoullNeed\LivewireForms\View\Components;

use Livewire\Component;
use Statamic\Facades\Form;
use Statamic\Fields\Tab;
use Statamic\Facades\FormSubmission;

new class extends Component
{
    public string $in;
    public array $sections;
    public bool $splitSections;
    public bool $strict;
    public ?string $success = null;
    public string $defaultValues;

    public array $values = [];

    public function __construct(
        ?string $defaultValues = null
    ) {
        if ($defaultValues === 'prefill' || $defaultValues === 'submit' || $defaultValues === 'both')
            $this->defaultValues = $defaultValues;
        else
            $this->defaultValues = config('livewire-forms.default-values');
    }

    public function mount(
        string $in,
        array $sections = [],
        array $values = [],
        ?bool $splitSections = true,
        ?bool $strict = false,
        ?string $success = null,
    ) {
        $this->in            = $in;
        $this->sections      = $sections;
        $this->values        = $values;
        $this->splitSections = $splitSections;
        $this->strict        = $strict;
        $this->success       = $success;
        
        $form = Form::find($this->in);
        $this->initValues($form);
    }

    protected function validationRules($form) {
        $validation = [];

        $fields = $form->blueprint()->fields()->all();

        foreach ($fields as $field) {
            if ($field->type() === 'toggle')
                $this->values[$field->handle()] = $this->values[$field->handle()] ?? false;

            $rules = $field?->rules() ? $field->rules()[$field->handle()] : [];
            $rules = array_map(
                fn ($r) => gettype($r) === 'object' ? (
                        get_class($r) === 'Statamic\Fieldtypes\Assets\MimesRule' ? $r->toGqlValidationString() : ''
                    ) : $r,
                $rules
            );
            if ($this->strict) {
                if ($field?->required())
                    $rules[] = 'required';
            }
            if (is_array($rules)) {                    
                $validation['values.' . $field->handle()] = implode('|', $rules);
            }
        }
        return $validation;
    }

    protected function initValues($form) {
        $this->values = [];
        foreach ($this->fields($form) as $field) {
            if (($this->defaultValues === 'prefill' || $this->defaultValues === 'both') && isset($field->config()['default']))
                $this->values[$field->handle()] = $field->config()['default'];
            else if ($field->type() === 'checkboxes' ||
                ($field->type() === 'select' && array_key_exists('multiple', $field->config())))
                $this->values[$field->handle()] = [];
            else
                $this->values[$field->handle()] = null;
        }
    }

    protected function fields($form) {
        return $form->fields()->all();
    }

    public function submit() {
        $form = Form::find($this->in);
        $validation = $this->validationRules($form);

        $cache = [];
        if ($this->defaultValues === 'submit' || $this->defaultValues === 'both') {
            foreach ($this->fields($form) as $field) {
                if ((!array_key_exists($field->handle(), $this->values) || !$this->values[$field->handle()]) && isset($field->config()['default'])) {
                    array_push($cache, $field->handle());
                    $this->values[$field->handle()] = $field->config()['default'];
                }
            }
        }
        
        try {
            $this->validate($validation);
            $submission = FormSubmission::make()->form($form);
            $submission->data($this->values);
            $submission->save();

            if (config('livewire-forms.on-submit') == 'refresh')
                $this->success = __('Submission successful.');
            else if (config('livewire-forms.on-submit') == 'toast')
                $this->dispatch(
                    config('livewire-forms.listen-to') ?? 'notify',
                    type: 'success',
                    title: 'Success!',
                    message: __('Submission successful.')
                );
            $this->values = [];
            $this->initValues($form);
        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($this->defaultValues === 'submit' || $this->defaultValues === 'both') {
                foreach ($cache as $handle => $value) {
                    $this->values[$handle] = $value;
                }
            }
            throw $e;
        }
    }
};
?>
<statamic:form:create :in="$in" :class="$attributes->class(['flex flex-col gap-4'])->get('class')">
    <x-render-form :sections="$sections" :success="$success" :errors="$errors"/>
    
    <div class="bg-base-200 border-1 border-base-300 rounded-lg p-5 col-span-full flex justify-end">
        <x-button class="btn btn-primary" wire:click.prevent="submit">{{ $submit_label ?? 'Submit' }}</x-button>
    </div>
</statamic:form:create>