<?php
// functie waar in de controller aanstuur. Die functie call ik in switch statement in index.php.
// Ook definieer ik hier variabelen die moeten laden wanneer deze pagina wordt opgevraagd.
function portfolioController(){
    $author = "Damiën";
    $title = "Web <br> Developer";
    $lang = " HTML, CSS, JavaScript, PHP and MySQL.";
    $degree = "I study Software Development";
    $projects = "My own web application";

    require "./views/portfolio.view.php";
}

