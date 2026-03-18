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
<statamic:form:create :in="$in" :class="$attributes->class(['flex flex-col gap-4'])->get('class')">
<x-render-form :sections="$sections" :success="$success" :errors="$errors"/>
</statamic:form:create>