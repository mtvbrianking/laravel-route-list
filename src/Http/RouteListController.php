<?php

namespace Bmatovu\RouteList\Http;

use Illuminate\Routing\Controller;
use Illuminate\Routing\Router;

/**
 * @see \Illuminate\Foundation\Console\RouteListCommand
 */
class RouteListController extends Controller
{
    /**
     * Router.
     *
     * @var \Illuminate\Routing\Router
     */
    protected $router;

    /**
     * Create a controller instance.
     *
     * @param string $id
     * @param Router $router
     *
     * @return void
     */
    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    /**
     * Render routes.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $routes = collect($this->router->getRoutes())
            ->filter(function ($route) {
                return ! $this->matches(config('route-list.excluded'), $route->uri);
            })->map(function ($route) {
                $name = $route->action['as'] ?? '';

                if ($name && $this->matches(['/^generated::/'], $name)) {
                    $name = '';
                }

                return [
                    // 'host' => $route->action['where'],
                    'uri' => $route->uri,
                    'name' => $name,
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
            return $middleware instanceof \Closure ? 'Closure' : $middleware;
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
