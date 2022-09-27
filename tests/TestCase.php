<?php

namespace Pkboom\Pick\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Pkboom\Pick\PickServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            PickServiceProvider::class,
        ];
    }
}
