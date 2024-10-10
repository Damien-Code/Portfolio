<?php
// functie waar in de controller aanstuur. Die functie call ik in switch statement in index.php.
// Ook definieer ik een titel die ik in portfolio.view.php echo

function portfolioController(){
    $title = "Web <br> Developer";
    require "./views/portfolio.view.php";
}

