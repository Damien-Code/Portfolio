<?php
switch ($_SERVER['REQUEST_URI']) {
    case '/':
        require 'views/index.view.php';
        break;
    case '/about':
        require 'views/about.view.php';
        break;
    case '/process':
        require 'views/process.view.php';
        break;
    case '/work':
        require 'views/work.view.php';
        break;
    default:
        echo 'Error 404';
}

?>

