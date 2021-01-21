<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'route-list.',
    'prefix' => config('route-list.prefix'),
    'namespace' => 'Bmatovu\RouteList\Http',
    'middleware' => config('route-list.middleware', []),
], static function () {
    Route::get('/', 'RouteListController')->name('index');
});
