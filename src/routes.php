<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'route-list.',
    'prefix' => config('route-list.prefix'),
    'namespace' => 'Bmatovu\RouteList\Controllers',
    'middleware' => config('route-list.middleware', []),
], function () {
    Route::get('/', 'RouteListController')->name('index');
});
