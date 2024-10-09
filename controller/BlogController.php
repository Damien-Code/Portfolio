<?php
// functie waar in de controller aanstuur. Die functie call ik in switch statement in index.php.
// Ook definieer ik een titel die ik in blog.view.php echo
include 'ProfileController.php';
function blogController(){
    view($value = ['Author']);
    $title = $value['Author'];
    $title = "Blog";
    require "views/blog.view.php";
}