<?php

class AboutController
{
    /**
     * @return void
     * @author Damien-Code
     * @description Deze methode zorgt ervoor dat de pagina en titel van de About pagina correct geladen wordt.
     */
    public function about()
    {
        $title = "About";
        require "views/about.view.php";
    }
}