<?php
// functie waar in de controller aanstuur. Die functie call ik in switch statement in index.php.
// Ook definieer ik een titel die ik in about.view.php echo
class AboutController
{


    public function about()
    {
        $title = "About";
        require "views/about.view.php";
    }
}