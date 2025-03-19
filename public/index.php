<?php

require_once '../app/core/App.php';
require_once '../app/core/Router.php';
require_once '../app/core/Controller.php';
require_once '../app/core/Model.php';

$router = new Router();

// Define routes
$router->add('/', 'GET', function() {
    $controller = new HomeController();
    $controller->index();
});

$router->add('/about', 'GET', function() {
    $controller = new AboutController();
    $controller->index();
});

$router->add('/contact', 'GET', function() {
    $controller = new ContactController();
    $controller->index();
});

$router->add('/contact/submit', 'POST', function() {
    $controller = new ContactController();
    $controller->submit();
});

// Dispatch based on the current URL and method
$requestUri = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];
$router->dispatch(parse_url($requestUri, PHP_URL_PATH), $requestMethod);

?>