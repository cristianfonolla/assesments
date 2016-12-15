<?php

namespace Scool\Assesments\Providers;

use Acacha\Names\Providers\NamesServiceProvider;
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
        $this->defineRoutes();


    }

    protected function defineRoutes()
    {
        if (!$this->app->routesAreCached()) {
            $router = app('router');

            $router->group(['namespace' => 'Scool\Assesments\Http\Controllers'], function () {
                require __DIR__.'/../Http/routes.php';
            });
        }
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

        $this->app->bind(\Scool\Assesments\Repositories\AssesmentRepository::class, \Scool\Assesments\Repositories\AssesmentRepositoryEloquent::class);


        $this->registerNameServiceProvider();


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

    /**
     *
     */
    public function registerNameServiceProvider()
    {
        $this->app->register(NamesServiceProvider::class);
    }
}
