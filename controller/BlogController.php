<?php
// functie waar in de controller aanstuur. Die functie call ik in switch statement in index.php.
// Ook definieer ik een titel die ik in blog.view.php echo
use core\Database;
class BlogController
{
    public function blog(){
        $title = "Blog";
        require "./views/blog.view.php";
    }

    public function save($id = '')
    {
        global $conn;
        if (!empty($_POST['title'])) {
            include "Database.php";
            try {
                $author = $_POST['author'];
                $title = $_POST['title'];
                $post = $_POST['post'];
                if ($id == '') {
                    $sql = "INSERT INTO blogs (author, title, post) VALUES ('$author', '$title', '$post')";
                } else {
                    $sql = "UPDATE blogs SET title = '$title', post = '$post' WHERE id = '$id'";
                }
                $conn->exec($sql);
                echo "New post created successfully";
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

    public function delete($id)
    {
        include "Database.php";
        try {
            $sql = "DELETE FROM blogs WHERE id = '$id'";
            $conn->exec($sql);
            echo "Blog deleted successfully";

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}