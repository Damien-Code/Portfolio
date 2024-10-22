<?php
class LoginController
{
    /**
     * @author Damien-Code
     * @description Deze methode zorgt ervoor dat de login pagina correct geladen wordt.
     * @return void
     */
    public function login()
    {
        include './views/login.view.php';
    }
}

