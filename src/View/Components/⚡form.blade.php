<?php

namespace AllYoullNeed\LivewireForms\View\Components;

use Livewire\Component;
use Statamic\Facades\Form;
use Statamic\Fields\Tab;
use Statamic\Facades\FormSubmission;

new class extends Component
{
    public string  $in;
    public bool    $wizard;
    public array   $sections;
    public bool    $strict;
    public ?string $success = null;
    public string  $defaultValues;
    public array $tabs = [];
    public ?string $tab = null;

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
        string  $in,
        bool    $wizard   = false,
        array   $sections = [],
        array   $values   = [],
        ?bool   $strict   = false,
        ?string $success  = null,
    ) {
        $this->in            = $in;
        $this->wizard        = $wizard;
        $this->sections      = $sections;
        $this->values        = $values;
        $this->strict        = $strict;
        $this->success       = $success;
        
        $form = Form::find($this->in);
        if ($wizard) {
            $this->tab = $this->sections($form)->first()->display();
            $this->tabs = [$this->tab];
        }
        $this->initValues($form);
    }

    protected function initValues($form) {
        $this->values = []; 
        foreach ($this->fields($form) as $field) {
            if (($this->defaultValues === 'prefill' || $this->defaultValues === 'both') && isset($field->config()['default']))
                $this->values[$field->handle()] = $field->config()['default'];
            else if ($field->type() === 'checkboxes' ||
                ($field->type() === 'select' && array_key_exists('multiple', $field->config())))
                $this->values[$field->handle()] = [];
        }
    }

    protected function sections($form) {
        $sections = $form->blueprint()->tabs()->first()->sections();
        if ($this->sections != [])
            $sections = $sections->filter(fn($s) => in_array($s->display(), $this->sections))->values();
        return $sections;
    }

    protected function fields($form, $sections = null) {
        if ($sections) {
            $activeSections = array_filter(
                $form->blueprint()->tabs()->first()->sections()->all(),
                fn($section) => in_array($section->display(), $sections)
            );
            $activeFields = array_reduce(
                array_map(fn($section) => $section->fields()->all()->toArray(), $activeSections),
                'array_merge',
                []
            );
            $activeFieldsNames = array_map(fn($field) => $field['handle'], $activeFields);
            
            return $form->blueprint()->fields()->all()->filter(
                fn ($field) => in_array($field->handle(), $activeFieldsNames)
            );
        }
        else
            return $form->blueprint()->fields()->all();
    }
    
    protected function fieldNames($form) {
        $field_names = [];
        foreach ($this->fields($form) as $handle => $field) {
            $field_names['values.' . $handle] = $field->display();
        }
        return $field_names;
    }

    protected function validationRules($form, $sections = null) {
        $validation = [];

        foreach ($this->fields($form, $sections) as $field) {
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


    public function next() {
        $form = Form::find($this->in);
        $sections = $this->sections($form);


        $this->validate($this->validationRules($form, $this->tabs), [], $this->fieldNames($form));

        $index = array_search($this->tab, array_map(fn($s) => $s->display(), $sections->all()));
        if ($index < count($sections) - 1)
            $this->tab = $sections[$index + 1]->display();

        if (!in_array($this->tab, $this->tabs))
            array_push($this->tabs, $this->tab);
    }

    public function submit() {
        if ($this->wizard)
            array_push($this->tabs, $this->tab);

        $form = Form::find($this->in);
        $validation = $this->validationRules($form, $this->tabs);

        $cache = [];
        if ($this->defaultValues === 'submit' || $this->defaultValues === 'both') {
            foreach ($this->fields($form) as $field) {
                if ((!array_key_exists($field->handle(), $this->values) || $this->values[$field->handle()] === null) && isset($field->config()['default'])) {
                    array_push($cache, $field->handle());
                    $this->values[$field->handle()] = $field->config()['default'];
                }
            }
        }
        
        try {
            $this->validate($validation, [], $this->fieldNames($form));

            $submission = FormSubmission::make()->form($form);
            $submission->data($this->values);
            $submission->save();

            if (config('livewire-forms.on-submit') == 'refresh')
                $this->success = _('Submission successful');
            else if (config('livewire-forms.on-submit') == 'toast') {
                $this->dispatch(
                    config('livewire-forms.listen-to') ?? 'notify',
                    type: 'success',
                    title: _('Success') . '!',
                    message: _('Submission successful')
                );
                if ($this->wizard) {
                    $this->tab=$this->tabs[0];
                    $this->tabs = [];
                }
            }
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
    @if ($this->success)
        <x-alert type="success">
            {!! $this->success !!}
        </x-alert>
    @elseif ($wizard)
        <x-tabs>
            @foreach ($sections as $index => $section)
            @if ($index > 0)
            <span class="rtl:hidden tab pointer-events-none">&gt;</span>
            <span class="ltr:hidden tab pointer-events-none">&lt;</span>
            @endif
            <x-tab wire:model="tab" value="{{ $section['display'] }}">
                <div class="flex flex-col gap-4">
                    <x-slot:label @class([
                        'pointer-events-none' => !in_array($section['display'], $this->tabs)
                    ])>{{ $section['display'] }}</x-slot:label>

                    <x-render-form :sections="[$section]"/>
                    <div class="bg-base-200 border-1 border-base-300 rounded-lg p-5 col-span-full flex justify-end">
                        @if ($section !== array_last($sections))
                        <x-button class="btn btn-primary" wire:click.prevent="next">Next</x-button>
                        @else
                        <x-button class="btn btn-primary" wire:click.prevent="submit">{{ $submit_label ?? 'Submit' }}</x-button>
                        @endif
                    </div>
                </div>
            </x-tab>
            @endforeach
        </x-tabs>
    @else
        <x-render-form :sections="$sections"/>
        
        <div class="bg-base-200 border-1 border-base-300 rounded-lg p-5 col-span-full flex justify-end">
            <x-button class="btn btn-primary" wire:click.prevent="submit">{{ $submit_label ?? 'Submit' }}</x-button>
        </div>
    @endif

    @if (config('livewire-forms.on-submit') === 'toast' && config('livewire-forms.add-toast'))
        <x-toast @class([config('livewire-forms.toast-class')]) :listen-to="config('livewire-forms.listen-to')"/>
    @endif
</statamic:form:create>
