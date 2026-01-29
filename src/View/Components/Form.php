<?php

namespace AllYouNeed\StatamicForms\View\Components;


use Illuminate\View\Component;

class Form extends Component
{
    public function __construct(
        public array $sections = [],
        public $success = null,
        public $errors = null
    ) {
    }

    public function render(): View|Closure|string
    {
        return <<<'HTML'
        @if (isset($success))
            <x-alert type="success">
                {{ $success }}
            </x-alert>
        @else
            <!--template x-for="$wire.$errors">
                <span x-text="message"></span>
            </template-->

            @if (isset($errors))
                @if ((gettype($errors) === 'object' && !$errors->isEmpty())
                    || (gettype($errors) === 'array' && !empty($errors)))
                    <x-alert type="error">
                        @foreach($errors as $error)
                            {{ $error }}<br>
                        @endforeach
                    </x-alert>
                @endif
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
        HTML;
    }
}
