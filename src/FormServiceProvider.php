<?php
 
namespace AllYoullNeed\LivewireForms;
 
use Illuminate\Support\Facades\Blade;
use Livewire\Livewire;
use Statamic\Providers\AddonServiceProvider;

use Statamic\Fieldtypes\Assets\Assets;
use Statamic\Fieldtypes\Checkboxes;
use Statamic\Fieldtypes\Dictionary;
use Statamic\Fieldtypes\Files;
use Statamic\Fieldtypes\Icon;
use Statamic\Fieldtypes\Integer;
use Statamic\Fieldtypes\Radio;
use Statamic\Fieldtypes\Select;
use Statamic\Fieldtypes\Text;
use Statamic\Fieldtypes\TextArea;
use Statamic\Fieldtypes\Toggle;


use AllYoullNeed\LivewireForms\FieldTypes\Disclaimer;
use AllYoullNeed\LivewireForms\FieldTypes\Pin;
use AllYoullNeed\LivewireForms\FieldTypes\Rating;

use AllYoullNeed\LivewireForms\View\Components\Form;

final class FormServiceProvider extends AddonServiceProvider
{


    protected $vite = [ 
        'input' => [
            'resources/js/addon.js',
        ],
        'publicDirectory' => 'resources/dist',
    ]; 


    public function bootAddon(): void
    {
        if ($this->app->runningInConsole()) {
            $this->console();
        }
        else {
            $this->extendStatamicFieldTypes();
            $this->registerFieldTypes();
            $this->registerComponents();
        }
    }

    protected function console(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__ . '/../config/livewire-forms.php' => config_path('livewire-forms.php'),
        ], 'livewire-forms-config');

        $this->publishes([
            __DIR__ . '/fields' => resource_path('views/vendor/statamic/forms/fields'),
        ], 'livewire-forms-fields');
    }

    public function extendStatamicFieldTypes() {
        foreach([Dictionary::class, Select::class] as $fieldtype) {
            $fieldtype::appendConfigFields([
                'max_rows' => [
                    'display' => __('Maximum shown rows'),
                    'instructions' => __('Maximum number of rows used to show selected items (not the items in the dropdown)'),
                    'type' => 'integer',
                    'clearable' => 'false',
                    'default' => 1
                ], 
            ]);
        }
        foreach ([
                Assets::class,
                Checkboxes::class,
                Dictionary::class,
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
        Icon::makeSelectableInForms();
        Disclaimer::register(); Disclaimer::makeSelectableInForms();
        Pin       ::register(); Pin       ::makeSelectableInForms();
        Rating    ::register(); Rating    ::makeSelectableInForms();
        
    }
    public function registerComponents()
    {
        Blade::component('render-form', Form::class);

        Livewire::addComponent(
            config('livewire-forms.tag', 'statamic-form'),
            __DIR__ . '/View/Components/⚡form.blade.php'
        );
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/livewire-forms.php', 'livewire-forms');
    }
}