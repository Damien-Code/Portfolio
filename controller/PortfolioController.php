<?php
// functie waar in de controller aanstuur. Die functie call ik in switch statement in index.php.
// Ook definieer ik een titel die ik in portfolio.view.php echo


function portfolioController(){
    $title = "Web <br> Developer";
    $lang = "- Specialized in Web Development and <br> languages like HTML, CSS, JavaScript and PHP.";
    $degree = "- I study Software Development";
    $projects = "My own web application";


    require "./views/portfolio.view.php";
}

