<?php

use App\Core\Request;
use App\Core\Router;
use App\Controllers\HomeController;

$router = new Router();
$homeController = new HomeController();

// Define routes
$router->get('/', [$homeController, 'index']);
$router->get('/about', [$homeController, 'about']);
$router->get('/contact', [$homeController, 'contact']);
$router->post('/contact', [$homeController, 'contact']);  // For form submission

// Resolve the incoming request
$request = new Request();
$router->resolve($request);