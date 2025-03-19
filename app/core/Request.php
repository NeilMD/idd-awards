<?php

namespace App\Core;

class Request
{
    /**
     * Gets the HTTP request method (GET, POST, etc.)
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    /**
     * Gets the requested URI path.
     *
     * @return string
     */
    public function getPath(): string
    {
        $uri = $_SERVER['REQUEST_URI'];
        $baseUrl = $_SERVER['SCRIPT_NAME'];
        return substr($uri, strlen($baseUrl));
    }

    /**
     * Get data from the request body (for POST requests).
     *
     * @return array
     */
    public function getBody(): array
    {
        $data = [];
        if ($this->getMethod() === 'POST') {
            // For simplicity, we can use the PHP built-in functionality
            $data = $_POST;
        }
        return $data;
    }

    /**
     * Checks if the request method is POST.
     *
     * @return bool
     */
    public function isPost(): bool
    {
        return $this->getMethod() === 'POST';
    }
}