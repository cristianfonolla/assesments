<?php

namespace Scool\Assesments\Providers;

use Illuminate\Support\ServiceProvider;
use Scool\Assesments\Models\ScoolAssesments;

class AssesmentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrations();
        $this->publishFactories();
        $this->publishConfigs();


    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        if (!defined('SCOOL_ASSESMENT_PATH')) {
            define('SCOOL_ASSESMENT_PATH', realpath(__DIR__ . '/../../'));
        }
    }

    private function loadMigrations()
    {

        $this->loadMigrationsFrom(SCOOL_ASSESMENT_PATH . '/database/migrations');


    }

    private function publishFactories()
    {

        $this->publishes(
            ScoolAssesments::factories(), "scool_assesments"
        );


    }

    public function publishConfigs()
    {

        $this->publishes(
            ScoolAssesments::config(), "scool_assesments"
        );



    }
}
