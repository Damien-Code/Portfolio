<?php
// functie waar in de controller aanstuur. Die functie call ik in switch statement in index.php.
// Ook definieer ik een titel die ik in blog.view.php echo
include './models/BlogModel.php';
class BlogController
{
    public function blog(){
        $title = "Blogs";
        require "./views/blog.view.php";
    }

    public function save()
    {
        $title = "Blogs";
        require "./views/blog.view.php";
        $save = new BlogModel();
        $save->save();
    }

    public function view(){
        $title = "Blogs";
        $view = new BlogModel();
        $posts = $view->view();
//        die(var_dump($row));
        require "./views/blog.view.php";
    }
}