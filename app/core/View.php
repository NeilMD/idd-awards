<?php

namespace App\Core;

class View
{
    /**
     * Renders the view with the provided data.
     *
     * @param string $view The view file to render.
     * @param array $data Data to be passed to the view.
     * @return void
     */
    public static function render(string $view, array $data = []): void
    {
        // Extract the data to variables so it can be used in the view
        extract($data);

        // Set the path to the view file
        $viewPath = __DIR__ . '/../views/' . $view . '.php';

        // Check if the view file exists
        if (file_exists($viewPath)) {
            // Include the view file, so its content is displayed
            include $viewPath;
        } else {
            // If the view doesn't exist, handle the error
            echo "View file not found: $viewPath";
        }
    }
}