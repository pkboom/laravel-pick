<?php

namespace Pkboom\Pick;

use Illuminate\Support\ServiceProvider;

class PickServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->singleton(Pick::class, function ($app) {
            return new Pick();
        });
    }
}
