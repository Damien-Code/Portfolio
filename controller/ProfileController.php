<?php
// functie waar in de controller aanstuur. Die functie call ik in switch statement in index.php.
include "./models/ProfileModel.php";


class ProfileController
{
    public function profile()
    {
        $title = "My Profile";
        require "./views/profile.view.php";
//    $profileModel = new profileModel();
//    $profileModel->ProfileRouter();
//    return $profileModel;
    }

//een functie waarbij ik waardes uit de database kan verwijderen.
//Ik moet wel de "Database.php" includen omdat er anders geen connectie gemaakt wordt met de database.
    public function delete()
    {
        $delete = new profileModel();
        $delete->delete();
        header("Location: /");
    }


//een functie waarbij ik ingevoerde waardes in een form kan toevoegen aan de database.
//function save($id = '')
    public function save()
    {
        $title = "My Profile";
        require "./views/profile.view.php";
        $save = new profileModel();
        $save->save();
    }
//een functie waarbij ik de ingevoerde waardes zou kunnen updaten.
//wel wil ik maar 1 gekozen id updated en niet alle. Daarom gebruik ik WHERE id = $id


    public function update()
    {

        $update = new profileModel();
        $data = $update->update();
        $title = "My Profile";
        include './views/profile.view.php';
    }

//een functie waarbij ik er voor heb gezorgd dat je een portfolio kunt bekijken.
//Ik wilde wel dat ik waardes van een id gelijk stelde aan een variabel zodat ik deze kan gebruiken op de portfolio pagina
//door middel van global is het mij uiteindelijk gelukt om deze waardes uit deze functie te halen
//ik roep deze variabelen in de profile functie aan zodat deze variabelen te zien zijn via de gekozen portfolio
//anders is de portfolio pagina ingeladen met mijn eigen waardes die ik weer in PortfolioController aanroep.

    public function view()
    {
        $view = new profileModel();
        $row = $view->view();

        $author = $row['Author'];
        $title = $row['Title'];
        $degree = $row['Degree'];
        $projects = $row['Projects'];
        $lang = $row['Languages'];

        include './views/portfolio.view.php';
    }
}
