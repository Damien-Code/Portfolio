<?php
class RoutesController
{
    public function index()
    {
        require './views/index.view.php';
    }

    public function about()
    {
        require './views/about.view.php';
    }

    public function blog()
    {
        require './views/blog.view.php';
    }

    public function login()
    {
        require './views/login.view.php';
    }

    public function portfolio()
    {
        require './views/portfolio.view.php';
    }

    public function update()
    {
        require './views/update.view.php';
    }

    public function profile()
    {
        $title = "My Profile";
        require './views/profile.view.php';
    }

//    public function view(){
////        die(var_dump($_POST));
//        $view = new ProfileController();
//
//        $view->view($_POST['id']);
//    }
}