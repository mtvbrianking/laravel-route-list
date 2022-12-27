<?php

namespace Bmatovu\RouteList\Tests;

/**
 * @see \Bmatovu\RouteList\Http\RouteListController
 */
class RouteListControllerTest extends TestCase
{
    protected $packagePublicDir = __DIR__.'/../public';

    public function testCanDisplayRouteList()
    {
        $this->app->instance('path.public', $this->packagePublicDir);

        $response = $this->get(route('route-list.index'));

        $response->assertStatus(200);
    }
}
