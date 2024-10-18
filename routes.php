<?php

return [
    'GET' => [
        '/' => 'controller/IndexController::index',
        '/about' => 'controller/AboutController::about',
//        '/about/me' => 'controller/AboutController::me',
        '/blog' => 'controller/BlogController::view',
        '/login' => 'controller/LoginController::login',
        '/portfolio' => 'controller/PortfolioController::portfolio',
        '/profile' => 'controller/ProfileController::profile',
        '/portfolio/view' => 'controller/ProfileController::view',
        '/profile/update' => 'controller/ProfileController::update',

], 'POST' => [
        '/' => 'controller/IndexController::index',
        '/blog/update' => 'controller/BlogController::update',
        '/view' => 'controller/ProfileController::view',
        '/blog/delete' => 'controller/BlogController::delete',

        '/save' => 'controller/ProfileController::save',
        '/delete' => 'controller/ProfileController::delete',
        '/profile' => 'controller/ProfileController::save',
    ]
];