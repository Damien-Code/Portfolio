<?php
// functie waar in de controller aanstuur. Die functie call ik in switch statement in index.php.
include "./models/profileModel.php";
//function ProfileController()
//{
////    Deze variabelen moet ik hier en in de view functie aangeven met global.
////    Ik wil deze variabelen gebruiken zodat de portfolio pagina zich aanpast naar de userID
//    $pagetitle = "My Profile";
//    global $title;
//    global $degree;
//    global $author;
//    global $lang;
//    global $projects;
//    $data = '';
////    hier call ik de functies die ik in deze file definieer
//    if (!empty($_GET['action'])) {
//        switch ($_GET['action']) {
//            case 'save':
//                save($_POST['id']);
//                break;
//            case 'delete':
//                delete($_GET['id']);
//                break;
//            case 'update':
//                $data = update($_GET['id']);
//                break;
//            case 'view':
//                view($_GET['id']);
////                require 'controller/PortfolioController.php';
////                portfolioController();
//                break;
//        }
//    }
//
////    een extra if statement toegevoegd omdat ik anders steeds een undefined array key 'action' error kreeg
////    wel heb ik in deze if statement ervoor gezorgd dat wanneer het bijvoorbeeld delete is, dat hij een andere pagina moet laden.
////    dit heb ik zo gedaan omdat er anders 2 paginas over elkaar heen laadde.
////    Het heeft lang geduurd voordat ik dit heb weten op te lossen.
////
//    if (!empty($_GET['action'])) {
////        die(var_dump($_GET));
//
//        if ($_GET['action'] == 'save') {
//            require "./views/profile.view.php";
//        } elseif ($_GET['action'] == 'delete') {
//            $title = 'Working with';
//            require "./views/index.view.php";
//        } elseif ($_GET['action'] == 'update') {
//            require "./views/profile.view.php";
//        } elseif ($_GET['action'] == 'view') {
//            require "./views/portfolio.view.php";
//        }
//    } else {
//        require "./views/profile.view.php";
//    }
//
//}
function profileModel(){
    $profileModel = new profileModel();
    $profileModel->ProfileController();
    return $profileModel;

}

//een functie waarbij ik waardes uit de database kan verwijderen.
//Ik moet wel de "database.php" includen omdat er anders geen connectie gemaakt wordt met de database.
function delete($id){
    $delete = new profileModel();
    $delete->delete($id);

}


//een functie waarbij ik ingevoerde waardes in een form kan toevoegen aan de database.
//function save($id = '')
function save($id = ''){
    $save = new profileModel();
    $save->save($id);

}
//een functie waarbij ik de ingevoerde waardes zou kunnen updaten.
//wel wil ik maar 1 gekozen id updated en niet alle. Daarom gebruik ik WHERE id = $id

function update($id=null)
{
    $update = new profileModel();
    return $update->update($id);
}

//een functie waarbij ik er voor heb gezorgd dat je een portfolio kunt bekijken.
//Ik wilde wel dat ik waardes van een id gelijk stelde aan een variabel zodat ik deze kan gebruiken op de portfolio pagina
//door middel van global is het mij uiteindelijk gelukt om deze waardes uit deze functie te halen
//ik roep deze variabelen in de profile functie aan zodat deze variabelen te zien zijn via de gekozen portfolio
//anders is de portfolio pagina ingeladen met mijn eigen waardes die ik weer in PortfolioController aanroep.

function view($id){
    $view = new profileModel();
    $view->view($id);
}