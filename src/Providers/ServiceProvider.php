<?php

namespace AdamAlvis\CsvImporter\Providers;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // load package routes
        $this->loadRoutesFrom(__DIR__ . '/../routes.php');

        // load package views
        $this->loadViewsFrom(__DIR__ . '/../../assets/views', 'adamalvis/csv-importer');

        // config files to publish
        $this->publishes([
            __DIR__ . '/../../config/csv-importer.php' => config_path('csv-importer.php')
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
