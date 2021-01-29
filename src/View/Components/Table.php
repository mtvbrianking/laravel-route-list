<?php

namespace Bmatovu\RouteList\View\Components;

use Illuminate\Routing\Router;
use Illuminate\View\Component;

class Table extends Component
{
    /**
     * Router.
     *
     * @var \Illuminate\Routing\Router
     */
    protected $router;

    /**
     * Table ID.
     *
     * @var string
     */
    protected $id;

    /**
     * Create a new component instance.
     *
     * @param string                     $id
     * @param \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function __construct(Router $router, $id = 'routes')
    {
        $this->router = $router;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $routes = $this->getRoutes();

        return view('route-list::components.table', [
            'id' => $this->id,
            'routes' => $routes,
        ]);
    }

    protected function getRoutes()
    {
        return collect($this->router->getRoutes())
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
