<?php

namespace Pkboom\Pick;

use Illuminate\Support\ServiceProvider;

class PickServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/pick.php' => config_path('pick.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/pick.php', 'pick');

        $this->app->singleton(Pick::class, function ($app) {
            return new Pick();
        });
    }
}
