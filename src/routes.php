<?php

use Illuminate\Container\Container;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Support\Facades\Route;

$config = Container::getInstance()->make(Repository::class);

Route::group([
    'as' => 'route-list.',
    'prefix' => $config->get('route-list.prefix'),
    'namespace' => 'Bmatovu\RouteList\Controllers',
    'middleware' => $config->get('route-list.middleware', []),
], function () {
    Route::get('/', 'RouteListController')->name('index');
});
