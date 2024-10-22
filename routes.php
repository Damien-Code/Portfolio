<?php

// De routing voor alle GET requests
return [
    'GET' => [
        '/' => 'controller/IndexController::index',
        '/about' => 'controller/AboutController::about',
        '/blog' => 'controller/BlogController::blog',
        '/login' => 'controller/LoginController::login',
        '/portfolio' => 'controller/PortfolioController::portfolio',
        '/profile' => 'controller/ProfileController::profile',
        '/portfolio/view' => 'controller/ProfileController::view',
        '/profile/update' => 'controller/ProfileController::update',

//        De routing voor alle POST requests
], 'POST' => [
        '/view' => 'controller/ProfileController::view',
        '/blog/save' => 'controller/BlogController::save',
        '/blog/delete' => 'controller/BlogController::delete',
        '/save' => 'controller/ProfileController::save',
        '/delete' => 'controller/ProfileController::delete',
        '/profile' => 'controller/ProfileController::save',
    ]
];