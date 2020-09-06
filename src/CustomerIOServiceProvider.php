<?php

namespace FabioFerreira\CustomerIO;

use Illuminate\Support\ServiceProvider;

class CustomerIOServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('customerio', function ($app) {
            return new CustomerIO();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config.php' => config_path('customerio.php'),
        ]);
    }
}
