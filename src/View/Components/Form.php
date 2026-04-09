<?php

namespace AllYoullNeed\LivewireForms\View\Components;


use Illuminate\View\Component;

class Form extends Component
{
    public function __construct(
        public array $sections = [],
    ) {
    }

    public function render(): View|Closure|string
    {
        return <<<'HTML'
        @foreach($sections as $section)
            
            <x-card class="bg-base-200 border-1 border-base-300">
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
        HTML;
    }
}
