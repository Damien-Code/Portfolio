<?php
switch ($_SERVER['REQUEST_URI']) {

//    home page
    case '/':
        require 'controller/index.controller.php';
        break;
//        about page
    case '/about':
        require 'controller/about.controller.php';
        break;
//        process page
    case '/process':
        require 'controller/process.controller.php';
        break;
//        work page
    case '/work':
        require 'controller/work.controller.php';
        break;
    case '/blog':
//        blog page
        require 'controller/blog.controller.php';
        break;
//        als de pagina niet bestaat
    default:
        echo 'Error 404';
}
//var_dump($_SERVER['REQUEST_URI']);

?>


<!--$array = [2, 4, 6, 8, 10];-->
<!--$newArray = [];-->
<!--foreach($array as $value) {-->
<!--    array_push($newArray, $value * 2);-->
<!--}-->
<!---->
<!--print_r($newArray);-->
<!---->
<!--$names = ["Damiën", "Lucas", "Mischa", "Willem", "Jan"];-->
<!---->
<!--//sorteert een array in omgekeerde volgorde volgens de index waarde.-->
<!--krsort($names);-->
<!--print_r($names);-->
<!---->
<!--for($i = count($names)-1; $i >= 0; $i--){-->
<!--    print_r($names[$i]);-->
<!--}-->


