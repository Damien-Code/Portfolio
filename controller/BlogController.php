<?php
include './models/BlogModel.php';
class BlogController
{
    /**
     * @author Damien-Code
     * @description Deze methode zorgt ervoor dat de waardes van de blogs te zien zijn op de blog pagina
     * @return void
     */
    public function blog(){
        $view = new BlogModel();
        $posts = $view->blog();
        $title = "Blogs";
        require './views/blog.view.php';
    }

    /**
     * @author Damien-Code
     * @description Deze methode zorgt ervoor dat de invoer van de form opgeslagen wordt op de database.
     * Hierna wordt de pagina opnieuw geladen.
     * Als deze niet wordt gerequired wordt de pagina niet geladen.
     * @return void
     */
    public function save()
    {
        $title = "Blogs";
        $save = new BlogModel();
        $save->save();
        $posts = $save->blog();
        require "./views/blog.view.php";
    }


    /**
     * @author Damien-Code
     * @description Deze methode zorgt ervoor dat er blogs verwijderd kunnen worden van de blog pagina
     * @return void
     */
    public function delete(){
        $title = "Blogs";
        $delete = new BlogModel();
        $delete->delete();
        $posts = $delete->blog();
        require "./views/blog.view.php";
    }
}