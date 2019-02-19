<?php

use App\Controllers\FormController;
use App\Controllers\IndexController;
use App\Controllers\ToolsController;
use App\Http\Router;

$router = new Router();

$router->add('get', '/', IndexController::class, 'index');
$router->add('get', '/forms', FormController::class, 'index');
$router->add('get', '/forms/view', FormController::class, 'view');

$router->add('get', '/phpinfo', ToolsController::class, 'phpinfo');

return $router;
