<?php

namespace Bmatovu\RouteList;

use Illuminate\Container\Container;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Support\ServiceProvider;

class RouteListServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $config = Container::getInstance()->make(Repository::class);

        if ($config->get('route-list.debug') != $config->get('app.debug')) {
            return;
        }

        // ...

        $this->loadRoutesFrom(__DIR__.'/routes.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'route-list');

        $this->publishes([
            __DIR__.'/../config/route-list.php' => config_path('route-list.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/route-list'),
        ], 'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/route-list.php', 'route-list');
    }
}
