<?php

namespace core;

class RequestPage
{
    public static function connect($SERVER, $routes)
    {
        $page = $SERVER['REQUEST_URI'];
        $requestMethod = $SERVER['REQUEST_METHOD'];
        $route = '';
        $controller = '';
        $parts = [];
        array_key_exists($page, $routes[$requestMethod]) ?
            $route = $routes[$requestMethod][$page] : '';
        $parts = explode('::', $route);
        $controller = explode('controllers/', $parts[0]);
        return [$controller[1], $parts[1]];
    }
}