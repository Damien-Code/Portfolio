<?php

return [
    'GET' => [
        '/' => 'controller/IndexController::index',
        '/about' => 'controller/AboutController::index',
//        '/about/me' => 'controller/AboutController::me',
        '/blog' => 'controller/RoutesController::blog',
        '/login' => 'controller/RoutesController::login',
        '/portfolio' => 'controller/RoutesController::portfolio',
        '/profile' => 'controller/RoutesController::profile',
        '/update' => 'controller/RoutesController::update',
], 'POST' => [
        '/' => 'controller/IndexController::index',
        '/blog/update' => 'controller/BlogController::update',
        '/view' => 'controller/RoutesController::view',
        '/blog/delete' => 'controller/BlogController::delete',
        '/portfolio' => 'controller/RoutesController::portfolio',
    ]
];