<?php

require __DIR__ . '/../vendor/autoload.php';

use Framework\Kernel;
use Framework\Request;
use App\RouteProvider;
use App\ServiceProvider;

$routeProvider = new RouteProvider();
$serviceProvider = new ServiceProvider();

$kernel = new Kernel();
$kernel->registerServices($serviceProvider);
$kernel->registerRoutes($routeProvider);

$urlPath = parse_url($_SERVER['REQUEST_URI'], component: PHP_URL_PATH);
if (!is_string($urlPath)) {
    $urlPath = '/';
}

$request = new Request($_SERVER['REQUEST_METHOD'], $urlPath, $_GET, $_POST);
$response = $kernel->handle($request);
$response->echo();
