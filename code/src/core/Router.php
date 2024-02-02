<?php

namespace ots\core;

use ots\core\F;

final class Router
{
    private $routes = [];
    private const SEPARATOR = '::';

    public function register(string $url, callable $fn, string $methods = 'GET|POST'): array{
        $url = preg_replace('~{(.*)}~mU', '(?<$1>\S+)', $url);
        $url = sprintf('~^(%s)/?%s(%s)$~i',$url, self::SEPARATOR, $methods);
        $this->routes[$url]= $fn;

        return $this->routes;
    }

    public function handle(Request $request): mixed
    {
        $searchString = $request->getUri() . self::SEPARATOR .$request->getMethod();

        foreach($this->routes as $rexEx => $action){
            $matches = [];
            if(!preg_match($rexEx,$searchString,$matches)){
                continue;
            }
            $matches = array_filter($matches,function ($key){
                return is_int($key) === false;
            }, ARRAY_FILTER_USE_KEY);

            $matches['request'] = $request;

            return $action(...$matches);
        }
        
        $message = sprintf('Route %s not found',$request->getUri());
        http_response_code(404);
        throw new RouteNotFoundException($message);
    }
}