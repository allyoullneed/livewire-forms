<?php
 
namespace AllYoullNeed\StatamicForms;
 
use Illuminate\Support\Facades\Blade;
use Livewire\Livewire;
use Statamic\Providers\AddonServiceProvider;

use Statamic\Fieldtypes\Assets\Assets;
use Statamic\Fieldtypes\Checkboxes;
use Statamic\Fieldtypes\Files;
use Statamic\Fieldtypes\Integer;
use Statamic\Fieldtypes\Radio;
use Statamic\Fieldtypes\Select;
use Statamic\Fieldtypes\Text;
use Statamic\Fieldtypes\TextArea;
use Statamic\Fieldtypes\Toggle;


use AllYoullNeed\StatamicForms\FieldTypes\Disclaimer;
use AllYoullNeed\StatamicForms\FieldTypes\Pin;

use AllYoullNeed\StatamicForms\View\Components\Form;

final class FormServiceProvider extends AddonServiceProvider
{

    // protected $vite = [ 
    //     'input' => [
    //         'resources/js/addon.js',
    //     ],
    //     'publicDirectory' => 'resources/dist',
    //     'hotFile' => __DIR__ . '/../resources/dist/hot',
    // ]; 


    public function bootAddon(): void
    {
        if ($this->app->runningInConsole()) {
        }
        else {
            $this->extendStatamicFieldTypes();
            $this->registerFieldTypes();
            $this->registerComponents();
        }   
    }

    public function extendStatamicFieldTypes() {
        foreach ([
                Assets::class,
                Checkboxes::class,
                Files::class,
                Integer::class,
                Radio::class,
                Select::class,
                Text::class,
                TextArea::class,
                Toggle::class,
                Disclaimer::class,
                Pin::class
            ] as $fieldtype) {
            $fieldtype::appendConfigFields([
                'color' => [
                    'display' => __('Semantic color'),
                    'instructions' => 'Choose the semantic color for the field',
                    'type' => 'select',
                    'clearable' => 'true',
                    'options' => [
                        'default'   => 'Default',
                        'neutral'   => 'Neutral',
                        'primary'   => 'Primary',
                        'secondary' => 'Secondary',
                        'accent'    => 'Accent',
                        'info'      => 'Info',
                        'success'   => 'Success',
                        'warning'   => 'Warning',
                        'error'     => 'Error',
                    ],
                ],                    
                'size' => [
                    'display' => 'Size',
                    'instructions' => 'Place the toggle above or below the disclaimer text',
                    'type' => 'select',
                    'clearable' => true,
                    'options' => [
                        'xl' => 'Extra-large',
                        'lg' => 'Large',
                        'md' => 'Medium',
                        'sm' => 'Small',
                        'xs' => 'Extra-small',
                    ],
                ],
                'required_badge' => [
                    'display' => 'Automatic required badge',
                    'instructions' => 'Place a badge on the control if the field is required',
                    'type' => 'select',
                    'default' => 'on',
                    'options' => [
                        'off' => 'No',
                        'on' => 'Yes',
                        'extended' => 'Extended',
                    ],
                ],
                'badges' => [
                    'display' => 'Badges',
                    'instructions' => 'Additional badges',
                    'type' => 'select',
                    'clearable' => true,
                ],
            ]);
        }
    }

    public function registerFieldTypes()
    {
        Disclaimer::register(); Disclaimer::makeSelectableInForms();
        Pin       ::register(); Pin       ::makeSelectableInForms();
        
    }
    public function registerComponents()
    {
        Blade::component('render-form', Form::class);

        Livewire::addComponent(
            'statamic-form',
            __DIR__ . '/View/Components/⚡form.blade.php'
        );
    }
}