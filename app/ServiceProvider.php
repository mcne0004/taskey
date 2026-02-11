<?php

namespace App;

use App\Controllers\HomeController;
use App\Controllers\TaskController;
use Framework\ResponseFactory;
use Framework\ServiceContainer;
use Framework\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(ServiceContainer $serviceContainer): void
    {
        $responseFactory = $serviceContainer->get(ResponseFactory::class);
        $homeController = new HomeController($responseFactory);
        $serviceContainer->set($homeController::class, $homeController);
        $taskController = new TaskController($responseFactory);
        $serviceContainer->set($taskController::class, $taskController);
    }
}
