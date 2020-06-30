<?php

namespace SON\Framework;

class Router
{
    private $routes = [];

    public function add(string $pattern, $callback)
    {
        $pattern = '/^' . \str_replace('/', '\/', $pattern) . '$/';
        $this->routes[$pattern] = $callback;
    }
    
    public function run()
    {
        $url = $_SERVER['PATH_INFO'] ?? '/';

        foreach ($this->routes as $route => $action){
            if (preg_match($route, $url, $params)) {
                return $action($params);
            }
        }

        if (array_key_exists($route, $this->routes)){
            return $this->routes[$route]();
        }
        return 'Página não encontrada';
    }
}