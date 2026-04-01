<?php

namespace AllYoullNeed\LivewireForms\Fieldtypes;

use Statamic\FieldTypes\Toggle;

class Disclaimer extends Toggle
{
    protected $icon = 'fieldtype-bard';

    /**
     * The blank/default value.
     *
     * @return array
     */
    public function defaultValue()
    {
        return null;
    }

    /**
     * Pre-process the data before it gets sent to the publish page.
     *
     * @param mixed $data
     * @return array|mixed
     */
    public function preProcess($data)
    {
        return $data;
    }

    /**
     * Process the data before it gets saved.
     *
     * @param mixed $data
     * @return array|mixed
     */
    public function process($data)
    {
        return $data;
    }

    protected function configFieldItems(): array
    {
        $defaultCode = <<<'CODE'
                        <div class="btn btn-ghost" onClick="modal_{{ $handle }}.showModal()">Show</div>
                        <x-modal id="modal_{{ $handle }}">
                          <x-card class="[&>div]:overflow-auto prose lg:prose-2xl min-w-100 max-w-[90vw] max-h-[80vh] bg-base-100">
                          <x-slot:title>
                            {{ $title }}
                            <div class="btn btn-ghost btn-sm hover:btn-error btn-circle absolute right-2 top-2" onclick="modal_{{ $handle }}.close()">✕</div>
                          </x-slot:title>
                          {!! $text !!}
                          </x-card>
                        </x-modal>
                        CODE;
        $result = Toggle::configFieldItems();
        $result[0]['fields'] = ['toggle' => [
                'display' => 'Include a toggle to accept',
                'instructions' => 'Join a toggle onto the disclaimer',
                'type' => 'toggle',
                'default' => true,
            ]] + $result[0]['fields'];
        $result[0]['fields']['inline_label']['if'] = [
            'toggle' => true,
        ];
        $result[0]['fields']['inline_label_when_true']['if'] = [
            'toggle' => true,
        ];
        $result[0]['fields']['inline_label']['default'] = 'I decline';
        $result[0]['fields']['inline_label_when_true']['default'] = 'I accept';
        array_push($result,
            [
                'display' => __('Disclaimer'),
                'instructions' => __('Edit the disclaimer text'),
                'fields' => [ 
                    'popup' => [
                        'display' => 'Show the disclaimer in a popup',
                        'type' => 'toggle',
                        'default' => false,
                    ],
                    'position' => [
                        'display' => 'Toggle position',
                        'instructions' => 'Place the toggle above or below the disclaimer text',
                        'type' => 'radio',
                        'options' => [
                            'above' => 'Above',
                            'below' => 'Below',
                        ],
                        'if' => [
                            'toggle' => true,
                            'popup' => false,
                        ],
                        'default' => 'above',
                    ],
                    'html_code' => [
                        'display' => 'HTML code to embed the disclaimer in',
                        'type' => 'code',
                        'indent_size' => 2,
                        'default' => $defaultCode,
                        'if' => [
                            'popup' => true,
                        ],
                    ],
                    'text' => [
                        'display' => 'Disclaimer text',
                        'type' => 'bard',
                        'save_html' => true,
                        'buttons' => [
                            'h2',
                            'h3',
                            'h4',
                            'h5',
                            'bold',
                            'italic',
                            'unorderedlist',
                            'orderedlist',
                            'removeformat',
                            'quote',
                            'anchor',
                            'table',
                        ],
                    ],
                ],
            ]
        );
        return $result;
    }
}
