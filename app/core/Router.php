<?php

namespace App\Core;

use App\Controllers\HomeController;

class Router
{
    private array $routes = [];

    /**
     * Registers a GET route.
     *
     * @param string $path
     * @param callable $callback
     * @return void
     */
    public function get(string $path, callable $callback): void
    {
        $this->routes['GET'][$path] = $callback;
    }

    /**
     * Registers a POST route.
     *
     * @param string $path
     * @param callable $callback
     * @return void
     */
    public function post(string $path, callable $callback): void
    {
        $this->routes['POST'][$path] = $callback;
    }

    /**
     * Resolves the current route based on the request method and URI.
     *
     * @param Request $request
     * @return mixed
     */
    public function resolve(Request $request)
    {
        $method = $request->getMethod();
        $path = $request->getPath();

        $callback = $this->routes[$method][$path] ?? null;

        if (!$callback) {
            (new HomeController())->showNotFound();
            return null;
        }

        return call_user_func($callback, $request);
    }
}