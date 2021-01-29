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
        if (config('route-list.debug') != config('app.debug')) {
            return;
        }

        $this->loadViewComponentsAs('route-list', [
            View\Components\Table::class,
        ]);

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'route-list');

        $this->publishes([
            __DIR__.'/../config/route-list.php' => config_path('route-list.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../public/vendor/route-list' => public_path('vendor/route-list'),
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
