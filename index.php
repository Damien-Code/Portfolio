<?php
require './controller/RoutesController.php';
require './controller/UserController.php';
require './controller/IndexController.php';
require './controller/PortfolioController.php';
require './controller/BlogController.php';
require './controller/AboutController.php';
//include "./models/Database.php";
$routes = require 'routes.php';

$page = $_SERVER['REQUEST_URI'];
$requestMethod  = $_SERVER['REQUEST_METHOD'];
$route = '';
array_key_exists($page, $routes[$requestMethod]) ? $route = $routes[$requestMethod][$page] : '';

$parts = explode('::', $route);
//die(var_dump($page));
$controller = explode('controller/', $parts[0]);
$redirect = new $controller[1];
$method = $parts[1];
$redirect->$method();
















