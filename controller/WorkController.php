<?php
// functie waar in de controller aanstuur. Die functie call ik in switch statement in index.php.
// Ook definieer ik een titel die ik in work.view.php echo
function workController(){
    $title = "Work";
    include './views/work.view.php';
}