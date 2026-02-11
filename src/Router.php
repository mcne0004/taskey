<?php

namespace Framework;

class Router
{
    public ResponseFactory $responseFactory;
    /**
     * @var array<Route>
     */
    public array $routes;

    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    public function dispatch(Request $request): Response
    {
        $routeMatch = null;
        foreach ($this->routes as $route) {
            if ($route->matches($request->method, $request->path)) {
                $routeMatch = $route;
                break;
            }
        }
        if ($routeMatch === null) {
            return $this->responseFactory->notFound();
        }
        $callback = $routeMatch->callback;

        return $callback();
    }
    public function addRoute(string $method, string $path, callable $callback): void
    {
        $this->routes[] = new Route($method, $path, $callback);
    }
}
