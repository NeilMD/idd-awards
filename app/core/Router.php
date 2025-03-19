<?php

class Router {
    private $routes = [];

    public function add($route, $method, $callback) {
        $this->routes[] = [
            'route' => $route,
            'method' => $method,
            'callback' => $callback
        ];
    }

    public function dispatch($url, $requestMethod) {
        foreach ($this->routes as $route) {
            if ($url === $route['route'] && $requestMethod === $route['method']) {
                return call_user_func($route['callback']);
            }
        }

        // If no match, show 404 page
        header("HTTP/1.0 404 Not Found");
        echo "404 - Page not found.";
        exit;
    }
}
?>