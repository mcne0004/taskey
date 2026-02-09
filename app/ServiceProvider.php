<?php

namespace App;

use App\Controllers\HomeController;
use App\Controllers\TaskController;
use Framework\ServiceContainer;
use Framework\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(ServiceContainer $serviceContainer): void
    {
        $homeController = new HomeController();
        $serviceContainer->set(HomeController::class, $homeController);
        $taskController = new TaskController();
        $serviceContainer->set(TaskController::class, $taskController);
    }
}
