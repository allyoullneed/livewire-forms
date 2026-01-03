<?php
 
namespace AllYouNeed\Forms;
 
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;



final class FormServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
        //     $this->commands(
        //         commands: [
        //             DataTransferObjectMakeCommand::class,
        //         ],
        //     );
        }
        else {
            $this->registerComponents();
        }   
    }
    public function registerComponents()
    {
        Livewire::addComponent(
            'form',
            __DIR__ . '/View/Components/⚡form.blade.php'
        );
    }
}