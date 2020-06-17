<?php

namespace Bmatovu\RouteList\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;

class RouteListController extends Controller
{
    /**
     * Render routes.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $routes = collect(Route::getRoutes())
            ->filter(function ($route) {
                return ! $this->matches(config('route-list.excluded'), $route->uri);
            })->map(function ($route) {
                return [
                    // 'host' => $route->action['where'],
                    'uri' => $route->uri,
                    'name' => $route->action['as'] ?? '',
                    'methods' => $route->methods,
                    'action' => $route->action['controller'] ?? 'Closure',
                    'middleware' => $this->getRouteMiddleware($route),
                ];
            });

        return view('route-list::index', [
            'routes' => $routes,
        ]);
    }

    /**
     * Get route middleware.
     *
     * @param \Illuminate\Routing\Route $route
     *
     * @return string
     */
    protected function getRouteMiddleware($route)
    {
        return collect($route->gatherMiddleware())->map(function ($middleware) {
            return $middleware instanceof Closure ? 'Closure' : $middleware;
        })->implode(', ');
    }

    /**
     * Perform a regular expression match.
     *
     * @param array  $patterns
     * @param string $subject
     *
     * @return bool
     */
    protected function matches($patterns, $subject)
    {
        $isMatched = false;

        foreach ($patterns as $pattern) {
            if (preg_match($pattern, $subject)) {
                $isMatched = true;

                break;
            }
        }

        return $isMatched;
    }
}
