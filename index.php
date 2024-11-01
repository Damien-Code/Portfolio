<?php
require './controller/UserController.php';
require './controller/IndexController.php';
require './controller/PortfolioController.php';
require './controller/BlogController.php';
require './controller/AboutController.php';
require './controller/ProfileController.php';
require './controller/LoginController.php';
require './controller/ContactController.php';

$routes = require 'routes.php';
/**
 * @author Damien-Code
 * @description Hier zorg ik ervoor dat de uri uit elkaar gehaald wordt en deze apart kan worden aangestuurd in routes.php
 * @return void
 */
$page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestMethod  = $_SERVER['REQUEST_METHOD'];
$route = '';
array_key_exists($page, $routes[$requestMethod]) ? $route = $routes[$requestMethod][$page] : '';

$parts = explode('::', $route);
$controller = explode('controller/', $parts[0]);
$redirect = new $controller[1];
$method = $parts[1];
$redirect->$method();





