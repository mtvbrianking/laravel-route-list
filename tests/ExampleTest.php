<?php

namespace Bmatovu\RouteList\Tests;

class ExampleTest extends TestCase
{
    public function test_dummy()
    {
        $response = $this->get('/route-list');

        $response->assertStatus(200);
    }
}
