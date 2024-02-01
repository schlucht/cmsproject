<?php

namespace ots\core;

class Router 
{
    protected array $routes = [];
    public Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
       $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        echo '<pre>';
        $this->request->getPath();
        echo '</pre>';
    }

}