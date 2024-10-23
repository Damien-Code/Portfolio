<?php
class AboutController
{
    /**
     * @author Damien-Code
     * @description Deze methode zorgt ervoor dat de pagina en titel van de About pagina correct geladen wordt.
     * @return void
     */
    public function about()
    {
        $title = "About";
        require "views/about.view.php";
    }
}