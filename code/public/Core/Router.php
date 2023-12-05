<?php


namespace OTS\Core;

use OTS\App\Controllers\BibleController;

class Router
{

    public static function route($url)
    {
        $urlParts = explode('/', $url);

        $name = !empty($urlParts[0]) ? $urlParts[0] : Config::get('default_controller');
        $controllerName = 'OTS\App\Controllers\\' . ucfirst($name) . 'Controller';

        array_shift($urlParts);
        $action = !empty($urlParts[0]) ? $urlParts[0] : 'index';
        $actionName = $action;
        $action .= "Action";
        array_shift($urlParts);

        if (!class_exists($controllerName)) {
            throw new \Exception("Der Controller {$controllerName} existiert nicht");
        }
        $controller = new $controllerName($name, $actionName);
        if (!method_exists($controller, $action)) {
            throw new \Exception("Die Methode / {$action} / existiert nicht");
        }
        call_user_func_array([$controller, $action], $urlParts);
    }
}

