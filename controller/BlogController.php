<?php
// functie waar in de controller aanstuur. Die functie call ik in switch statement in index.php.
// Ook definieer ik een titel die ik in blog.view.php echo
use Couchbase\View;

include './models/BlogModel.php';
class BlogController
{
    public function blog(){
        $view = new BlogModel();
        $posts = $view->blog();
        $title = "Blogs";
        require './views/blog.view.php';
    }
//    public function blog() {
//        $title = 'Working with';
//        try {
//            $conn = new Database();
//            $stmt = $conn->pdo->prepare("SELECT id, author, title, post FROM blogs");
//            $stmt->execute();
//            // set the resulting array to associative
//            $stmt->setFetchMode(PDO::FETCH_ASSOC);
//            $posts = $stmt->fetchAll();
//            include './views/blog.view.php';
//        } catch (PDOException $e) {
//            echo "Error: " . $e->getMessage();
//        }
//        $conn = null;
//    }

    public function save()
    {
        $title = "Blogs";
        require "./views/blog.view.php";
        $save = new BlogModel();
        $save->save();
    }

    public function delete(){
        $title = "Blogs";
        $delete = new BlogModel();
        $delete->delete();
        require "./views/blog.view.php";
    }
}