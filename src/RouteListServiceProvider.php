<?php

namespace Bmatovu\RouteList;

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
        $this->publishes([
            __DIR__.'/../config/route-list.php' => base_path('config/route-list.php'),
        ], 'config');
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
