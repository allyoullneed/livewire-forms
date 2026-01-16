<?php
 
namespace AllYouNeed\StatamicForms;
 
use Illuminate\Support\Facades\Blade;
use Livewire\Livewire;
use Statamic\Providers\AddonServiceProvider;


use AllYouNeed\StatamicForms\FieldTypes\Disclaimer;
use AllYouNeed\StatamicForms\FieldTypes\Pin;

//use AllYouNeed\StatamicForms\View\Components\Form;

final class FormServiceProvider extends AddonServiceProvider
{

    protected $vite = [ 
        'input' => [
            'resources/js/addon.js',
            'resources/css/addon.css',
        ],
        'publicDirectory' => 'resources/dist',
    ]; 


    public function bootAddon(): void
    {
        if ($this->app->runningInConsole()) {
        }
        else {
            $this->registerFieldTypes();
            $this->registerComponents();
        }   
    }
    public function registerFieldTypes()
    {
        Disclaimer::register(); Disclaimer::makeSelectableInForms();
        Pin       ::register(); Pin       ::makeSelectableInForms();
        
    }
    public function registerComponents()
    {
        $prefix = config('prefix');

        // Livewire::component('form', Form::class);
        Livewire::addComponent(
            'statamic-form',
            __DIR__ . '/View/Components/⚡form.blade.php'
        );
    }
}