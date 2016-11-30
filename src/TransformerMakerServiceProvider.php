<?php

namespace Ravit\Transformermaker;
use Illuminate\Support\ServiceProvider;
use Ravit\Transformermaker\Commands\MakeTransformer;
use Symfony\Component\Console\Output\ConsoleOutput;

class TransformerMakerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->bind('command.make:transformer', MakeTransformer::class);

        $this->commands([
            'command.make:transformer',
        ]);

        // $this->app->singleton(ConsoleOutput::class);
    }
}
