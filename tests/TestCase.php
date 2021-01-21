<?php
namespace Bmatovu\RouteList\Tests;

use Bmatovu\RouteList\RouteListServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    /**
     * Add package service provider.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            RouteListServiceProvider::class,
        ];
    }
}
