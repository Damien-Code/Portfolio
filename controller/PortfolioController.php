<?php
class PortfolioController
{
    /**
     * @author Damien-Code
     * @description In deze methode geef ik variabelen mee die moeten worden weergeven als de portfolio op wordt gevraagd.
     * Ik wil dat er portfolios kunnen worden weergeven maar als je naar de portfolio pagina gaat moet mijn portfolio worden weergeven.
     * @return void
     */
    public function portfolio()
    {
        $author = "Damiën";
        $title = "Software <br> Developer";
        $lang = " HTML, CSS, JavaScript, PHP and MySQL.";
        $degree = "I study Software Development";
        $projects = "My own web application";
        require "./views/portfolio.view.php";
    }
}
