<?php

namespace AllYoullNeed\StatamicForms\Fieldtypes;

use Statamic\Fields\Fieldtype;

class Rating extends FieldType
{
    protected $icon = 'star';
    protected $keywords = ['rating' , 'poll'];
    public $categories = ['number'];

    public function defaultValue()
    {
        return 0;
    }

    protected function configFieldItems(): array
    {
    return [
        'svg' => [
            'display' => 'SVG',
            'type' => 'icon',
            'default' => 'star',
        ],
        'color' => [
            'display' => 'Color',
            'instructions' => 'Pick a color to apply to the svg.',
            'type' => 'color'
        ],
        'maxScore' => [
            'display' => 'Maximum score',
            'type' => 'integer',
            'default' => '5',
        ]
    ];
    }
}
