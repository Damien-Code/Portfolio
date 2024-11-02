<?php

/**
 * @return void
 * @author Damien-Code
 * @description De routing voor alle GET requests
 */

return [
    'GET' => [
        '/' => 'controller/IndexController::index',
        '/about' => 'controller/AboutController::about',
        '/blog' => 'controller/BlogController::blog',
        '/login' => 'controller/LoginController::login',
        '/portfolio' => 'controller/PortfolioController::portfolio',
        '/profile' => 'controller/ProfileController::profile',
        '/contact' => 'controller/ContactController::contact',
        '/portfolio/view' => 'controller/ProfileController::view',
        '/profile/update' => 'controller/ProfileController::update',
    ],
    /**
     * @return void
     * @author
     * @description De routing voor alle post requests
     */
    'POST' => [
        '/view' => 'controller/ProfileController::view',
        '/blog/save' => 'controller/BlogController::save',
        '/blog/delete' => 'controller/BlogController::delete',
        '/save' => 'controller/ProfileController::save',
        '/delete' => 'controller/ProfileController::delete',
        '/profile' => 'controller/ProfileController::save',
    ]
];