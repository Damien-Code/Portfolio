<?php
include "./models/ProfileModel.php";

class ProfileController
{
    /**
     * @return void
     * @author Damien-Code
     * @description Deze methode zorgt ervoor dat de profile pagina correct wordt geladen.
     */
    public function profile()
    {
        $title = "My Profile";
        include "./views/profile.view.php";
    }

    /**
     * @return void
     * @author Damien-Code
     * @description Deze methode zorgt ervoor dat je op de pagina Index blijft na een portfolio te hebben verwijderd.
     */
    public function delete()
    {
        $delete = new profileModel();
        $delete->delete();
        header("Location: /");
    }

    /**
     * @return void
     * @author Damien-Code
     * @description Deze methode zorgt ervoor dat je een portfolio kunt aanmaken en dat deze wordt opgeslagen op de database.
     * Wel wil ik dat de profile pagina wordt geladen.
     */
    public function save()
    {
        $title = "My Profile";
        include "./views/profile.view.php";
        $save = new profileModel();
        $save->save();
    }

    /**
     * @return void
     * @author Damien-Code
     * @description Deze methode zorgt ervoor dat je een geplaatste portfolio kunt updaten. Wel moet de profile pagina geladen worden.
     */
    public function update()
    {

        $update = new profileModel();
        $data = $update->update();
        $title = "My Profile";
        include './views/profile.view.php';
    }


    /**
     * @return void
     * @author Damien-Code
     * @description Deze methode zorgt ervoor dat de portfolio pagina omgebouwd naar de gekozen portfolio.
     * In deze methode geef ik variabelen mee die dan worden weergeven op de portfolio pagina.
     */
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
