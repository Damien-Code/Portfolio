<?php
// functie waar in de controller aanstuur. Die functie call ik in switch statement in index.php.
// Ook definieer ik een titel die ik in process.view.php echo
function processController(){
    $title = "Process";
    require "./views/process.view.php";
}
