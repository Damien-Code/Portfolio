<?php
// functie waar in de controller aanstuur. Die functie call ik in switch statement in index.php.
// Ook definieer ik een titel die ik in index.view.php echo
function IndexController(){
    $title = "Working with";
    include './views/index.view.php';
}

