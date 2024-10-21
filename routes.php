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
        '/portfolio/view' => 'controller/ProfileController::view',
        '/profile/update' => 'controller/ProfileController::update',

], 'POST' => [
//        '/' => 'controller/IndexController::index',
        '/view' => 'controller/ProfileController::view',
        'blog/save' => 'controller/BlogController::save',
        '/blog/delete' => 'controller/BlogController::delete',
        '/save' => 'controller/ProfileController::save',
        '/delete' => 'controller/ProfileController::delete',
        '/profile' => 'controller/ProfileController::save',
    ]
];