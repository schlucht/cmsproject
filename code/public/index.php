<?php

use ots\api\Users;

use ots\core\{Router, Request, F};


require_once __DIR__ . '/../vendor/autoload.php';

$router = new Router();

$router->register('/', function (Request $request) {
    return F::message(date('Y/M/d h:i:s') . ' / Access denied!');
}, 'GET');
$router->register('/api', function (Request $request) {
    return F::message(date('Y/M/d h:i:s') . ' /api Access denied!');
}, 'GET');

require_once './routes.php';

$request = Request::createFromGlobal();

try {
    echo $router->handle($request);
} catch (\ots\core\RouteNotFoundException $e) {
    echo F::message($e->getMessage());
}