<?php
// functie waar in de controller aanstuur. Die functie call ik in switch statement in index.php.
// Ook definieer ik een titel die ik in profile.view.php echo
function ProfileController(){
    $title = "My Profile";
    require "./views/profile.view.php";
}
