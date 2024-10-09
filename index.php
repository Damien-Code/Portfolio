<?php
$defaultUser = '';
switch ($_SERVER['PATH_INFO'] ?? '/') {
//    home page
    case '/':
        require 'controller/IndexController.php';
        indexController();
        break;
    //        portfolio page
    case '/portfolio':
        require 'controller/PortfolioController.php';
        portfolioController();
        break;
//        login scherm
// Wanneer je naar de pagina profile gaat, moet je eerst inloggen.
//Je krijgt eerst een inlog scherm en na het inloggen wordt je verwezen naar de profile pagina
    case '/login':
        require 'controller/LoginController.php';
        LoginController();
        break;
//        process page
    case '/profile':
        require 'controller/ProfileController.php';
        ProfileController();
        break;
//        about page
    case '/about':
        require 'controller/AboutController.php';
        aboutController();
        break;
    case '/blog':
//        blog page
        require 'controller/BlogController.php';
        blogController();
        break;
//        als de request pagina niet bestaat
    default:
        echo 'Error 404';
}
//var_dump($_SERVER['REQUEST_URI']);



?>





