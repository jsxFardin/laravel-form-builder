<?php

namespace Jsxfardin\LaravelFormBuilder\Providers;

use Illuminate\Support\ServiceProvider;

class FormBuilderProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/../views', 'contact');

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->publishes([
            __DIR__ . '/../config/formbuilder.php' => config_path('formbuilder.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/formbuilder.php',
            'formbuilder'
        );
    }
}
