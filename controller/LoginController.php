<?php

class LoginController
{
    /**
     * @return void
     * @author Damien-Code
     * @description Deze methode zorgt ervoor dat de login pagina correct geladen wordt.
     */
    public function login()
    {
        include './views/login.view.php';
    }
}

