<?php

namespace App\Controllers;

use App\Core\View;

/**
 * Abstract BaseController class that provides common functionality for controllers.
 */
abstract class BaseController
{
    /**
     * Renders a view with the given data.
     *
     * @param string $view The view file to render.
     * @param array $data Data to be passed to the view.
     * @return void
     */
    protected function render(string $view, array $data = []): void
    {
        View::render($view, $data);
    }

    /**
     * Handles redirect to a specific route.
     *
     * @param string $url URL to redirect to.
     * @return void
     */
    protected function redirect(string $url): void
    {
        header('Location: ' . $url);
        exit;
    }

    /**
     * Handles HTTP 404 errors.
     *
     * @return void
     */
    protected function notFound(): void
    {
        header("HTTP/1.0 404 Not Found");
        View::render('errors/404');
        exit;
    }
}