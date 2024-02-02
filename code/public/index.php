<?php

use ots\controllers\UserController;

use ots\core\{Router, Request, F};


require_once __DIR__ . '/../vendor/autoload.php';

$router = new Router();

$router->register('/', function(Request $request) {
    return date('Y/M/d h:i:s') . ' Access denied!';
}, 'GET');


$router->register('/api/users', [UserController::class, 'getUsers'], 'GET');

$request = Request::createFromGlobal();

try {
    echo $router->handle($request);
} catch (\ots\core\RouteNotFoundException $e) {
    echo $e->getMessage();
}