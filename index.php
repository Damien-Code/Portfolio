<?php

switch ($_SERVER['REQUEST_URI']) {

//    home page
    case '/':
        require 'controller/IndexController.php';
        indexController();
        break;
//        about page
    case '/about':
        require 'controller/AboutController.php';
        aboutController();
        break;
//        process page
    case '/process':
        require 'controller/ProcessController.php';
        processController();
        break;
//        work page
    case '/work':
        require 'controller/WorkController.php';
        workController();
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



