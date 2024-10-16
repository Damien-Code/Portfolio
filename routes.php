<?php

return [
    'GET' => [
        '/' => 'controller/IndexController::index',
        '/about' => 'controller/AboutController::about',
//        '/about/me' => 'controller/AboutController::me',
        '/blog' => 'controller/BlogController::blog',
        '/login' => 'controller/LoginController::login',
        '/portfolio' => 'controller/PortfolioController::portfolio',
        '/profile' => 'controller/ProfileController::profile',
        '/update' => 'controller/ProfileController::update',
        '/view' => 'controller/ProfileController::view',

], 'POST' => [
        '/' => 'controller/IndexController::index',
        '/blog/update' => 'controller/BlogController::update',
        '/view' => 'controller/ProfileController::view',
        '/blog/delete' => 'controller/BlogController::delete',
        '/portfolio' => 'controller/RoutesController::portfolio',
        '/save' => 'controller/ProfileController::save',
        '/update' => 'controller/ProfileController::update',
        '/delete' => 'controller/ProfileController::delete',
        '/profile' => 'controller/ProfileController::save',
    ]
];