<?php
// functie waar in de controller aanstuur. Die functie call ik in switch statement in index.php.
include "./models/profileModel.php";

class ProfileController
{
        public $author;
        public $title;
        public $degree;
        public $projects;
        public $lang;
    public function ProfileController()
    {
//    Deze variabelen moet ik hier en in de view functie aangeven met global.
//    Ik wil deze variabelen gebruiken zodat de portfolio pagina zich aanpast naar de userID
        die(var_dump($_SERVER));
        $data = '';
        $pagetitle = "My Profile";
        $author = $this->author;
        $title = $this->title;
        $degree = $this->degree;
        $projects = $this->projects;
        $lang = $this->lang;
//    hier call ik de functies die ik in deze file definieer
        if (!empty($_GET['action'])) {

            switch ($_GET['action']) {
                case 'save':
                    save($_POST['id']);
                    break;
                case 'delete':
                    delete($_GET['id']);
                    break;
                case 'update':
                    $data = $this->update($_GET['id']);
                    break;
                case 'view':
                    $res = $this->view($_GET['id']);
//                    die(var_dump($res));
//                    require 'controller/PortfolioController.php';
//                portfolioController();
                    break;
            }

        }

//    een extra if statement toegevoegd omdat ik anders steeds een undefined array key 'action' error kreeg
//    wel heb ik in deze if statement ervoor gezorgd dat wanneer het bijvoorbeeld delete is, dat hij een andere pagina moet laden.
//    dit heb ik zo gedaan omdat er anders 2 paginas over elkaar heen laadde.
//    Het heeft lang geduurd voordat ik dit heb weten op te lossen.
//
//        if (!empty($_GET['action'])) {
////        die(var_dump($_GET));
//
//            if ($_GET['action'] == 'save') {
//                require "./views/profile.view.php";
//            } elseif ($_GET['action'] == 'delete') {
//                $title = 'Working with';
//                require "./views/index.view.php";
//            } elseif ($_GET['action'] == 'update') {
//                require "./views/profile.view.php";
//            } elseif ($_GET['action'] == 'view') {
//                require "./views/portfolio.view.php";
//            }
//        } else {
            require "./views/profile.view.php";
        }

//    }


    public function delete($id)
    {
        $delete = new profileModel();
        $delete->delete($id);

    }


    public function save($id = '')
    {
        $save = new profileModel();
        $save->save($id);

    }


    public function update($id = null)
    {
        $update = new profileModel();
        return $update->update($id);
    }


    public function view($id)
    {
        $view = new profileModel();
        $res = $view->view($id);
        return $res[0];
//    foreach ($stmt as $row) {
//        $author = $row['Author'];
//        $title = $row['Title'];
//        $degree = $row['Degree'];
//        $projects = $row['Projects'];
//        $lang = $row['Languages'];
    //}
    }
}