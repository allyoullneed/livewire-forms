<?php

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

        
        $form = Form::find($this->in);
        $fields = $form->blueprint()->fields()->all();

        foreach ($fields as $field) {
            if ($field->type() === 'checkboxes')
                $this->values[$field->handle()] = [];
            else if ($field->type() === 'select' && array_key_exists('multiple', $field->config()))
                $this->values[$field->handle()] = [];
        }        
    }

    public function eval() {
        $validation = [];

        $form = Form::find($this->in);
        $fields = $form->blueprint()->fields()->all();

        foreach ($fields as $field) {
            if ($field->type() === 'toggle')
                $this->values[$field->handle()] = $this->values[$field->handle()] ?? false;

            $this->validationAttributes['values.' . $field->handle()] = $field->display();

            // $rules = $field?->rules() ? array_filter($field->rules()[$field->handle()], fn($rule) => $rule !== 'nullable') : [];
            $rules = $field?->rules() ? $field->rules()[$field->handle()] : [];
            if ($this->strict) {
                if ($field?->required())
                    $rules[] = 'required';
            }
            if (!empty($rules))
                $validation['values.' . $field->handle()] = implode('|', $rules);
        }
        
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
<statamic:form:create :in="$in" class="flex flex-col gap-4">
    @if (isset($success))
        <x-alert type="success">
            {{ $success }}
        </x-alert>
    @else
        <!--template x-for="$wire.$errors">
            <span x-text="message"></span>
        </template-->

        @if (isset($errors) && !empty($errors))
            <x-alert type="error">
                @foreach($errors as $error)
                    {{ $error }}<br>
                @endforeach
            </x-alert>
        @endif
        @foreach($sections as $section)
            
            <x-card class="bg-base-100 shadow-md">
                <x-slot:title class="flex flex-col items-start">
                    {{ $section['display'] }}
                    <span class="text-base font-normal">{{ $section['instructions'] }}</span>
                </x-slot:title>
                <x-slot class="grid grid-cols-6 lg:grid-cols-12 gap-3 items-start">
                    @foreach ($section['fields'] as $field)
                        @if (false /*$field['visibility'] == 'hidden'*/)
                            <input type="hidden" name="{{ $field['handle'] }}" value="{{ $field['default'] }}"
                                @class([
                                    'col-span-full' => $field['width'] == 100,
                                    'col-span-9'    => $field['width'] == 75,
                                    'col-span-8'    => $field['width'] == 66,
                                    'col-span-6'    => $field['width'] == 50,
                                    'col-span-4'    => $field['width'] == 33,
                                    'col-span-3'    => $field['width'] == 25
                            ])/>
                        @else
                            {!! $field['field'] !!}
                        @endif
                    @endforeach
                </x-slot>
            </x-card>
        @endforeach
    @endif

    <div class="bg-base-200 rounded-lg p-5 col-span-full flex justify-end">
        <x-button class="btn btn-primary" wire:click.prevent="eval">{{ $submit_label ?? 'Submit' }}</x-button>
    </div>
</statamic:form:create>