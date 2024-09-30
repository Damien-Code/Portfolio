<?php
global $i;
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
    case '/blog':
        require 'views/blog.view.php';
        break;
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


