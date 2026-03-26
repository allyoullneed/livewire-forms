<?php

namespace AllYoullNeed\StatamicForms\View\Components;

use Livewire\Component;
use Statamic\Facades\Form;
use Statamic\Fields\Tab;
use Statamic\Facades\FormSubmission;

new class extends Component
{
    public string $in;
    public bool $splitSections;
    public bool $strict;

    public array $values = [];

    protected $validationAttributes = [];

    public function mount(
        string $in,
        array $values = [],
        ?bool $splitSections = true,
        ?bool $strict = false,
    ) {
        $this->in            = $in;
        $this->values        = $values;
        $this->splitSections = $splitSections;
        $this->strict        = $strict;

        
        // $form = Form::find($this->in);
        // $fields = $form->blueprint()->fields()->all();

        // foreach ($fields as $field) {
        //     if ($field->type() === 'checkboxes')
        //         $this->values[$field->handle()] = [];
        //     else if ($field->type() === 'select' && array_key_exists('multiple', $field->config()))
        //         $this->values[$field->handle()] = [];
        // }        
    }

    protected function validationRules($form) {
        $validation = [];

        $fields = $form->blueprint()->fields()->all();

        foreach ($fields as $field) {
            if ($field->type() === 'toggle')
                $this->values[$field->handle()] = $this->values[$field->handle()] ?? false;

            $this->validationAttributes['values.' . $field->handle()] = $field->display();

            // $rules = $field?->rules() ? array_filter($field->rules()[$field->handle()], fn($rule) => $rule !== 'nullable') : [];
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

    public function submit() {
        $form = Form::find($this->in);
        $validation = $this->validationRules($form);
        
        if ($this->validate($validation)) {
            $submitValues = [];
            foreach ($this->values as $key => $value) {
                $submitValues[substr($key, 7)] = $value;
            }

            $submission = FormSubmission::make()->form($form);
            $submission->data($submitValues);
            $submission->save();
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