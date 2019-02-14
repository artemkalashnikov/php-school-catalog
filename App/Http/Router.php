<?php

namespace App\Http;

class Router implements RouterInterface
{
    protected $routes = [];

    public function add(string $method, string $route, string $controller, string $action)
    {
        $method = strtoupper($method);
        $this->routes[$method][$route] = [
            'controller' => $controller,
            'action' => $action,
        ];
    }

    public function resolve(RequestInterface $request)
    {
        $method = $request->getMethod();
        $route = $request->getPath();

        if (!empty($this->routes[$method][$route])) {
            return $this->routes[$method][$route];
        }

        throw new \Exception('Route not found');
    }
}
