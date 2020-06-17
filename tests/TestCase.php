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

    /**
     * Get package aliases.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            // 'config' => [
            //     \Illuminate\Config\Repository::class,
            //     \Illuminate\Contracts\Config\Repository::class,
            // ],
        ];
    }
}
