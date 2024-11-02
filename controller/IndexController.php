<?php
include "./models/IndexModel.php";

class IndexController
{
    /**
     * @return void
     * @author Damien-Code
     * @description Deze methode zorgt ervoor dat alle waardes uit de model worden weergeven.
     */
    public function index()
    {
        $title = 'Working with';
        $rows = new IndexModel();
        $data = $rows->index();
        include "./views/index.view.php";
    }
}

