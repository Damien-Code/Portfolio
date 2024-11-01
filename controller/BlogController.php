<?php
include './models/BlogModel.php';

class BlogController
{
    /**
     * @return void
     * @author Damien-Code
     * @description Deze methode zorgt ervoor dat de waardes van de blogs te zien zijn op de blog pagina
     */
    public function blog()
    {
        $view = new BlogModel();
        $posts = $view->blog();
        $title = "Blogs";
        require './views/blog.view.php';
    }

    /**
     * @return void
     * @author Damien-Code
     * @description Deze methode zorgt ervoor dat de invoer van de form opgeslagen wordt op de database.
     * Hierna wordt de pagina opnieuw geladen.
     * Als deze niet wordt gerequired wordt de pagina niet geladen.
     */
    public function save()
    {
        $title = "Blogs";
        $save = new BlogModel();
        $save->save();
        $posts = $save->blog();
//        fix voor url reload
//        Voorheen gebruikte ik require maar als je de webpagina herlaadde dmv de url opnieuw te laadde
//        (http://localhost:8888/blog/save) dan werkte de website niet meer.
        header("Location: /blog");
    }

    /**
     * @return void
     * @author Damien-Code
     * @description Deze methode zorgt ervoor dat er blogs verwijderd kunnen worden van de blog pagina
     */
    public function delete()
    {
        $title = "Blogs";
        $delete = new BlogModel();
        $delete->delete();
        $posts = $delete->blog();
//        fix voor url reload
        header("Location: /blog");
    }
}