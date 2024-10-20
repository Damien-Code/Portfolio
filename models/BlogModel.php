<?php
use core\Database;

include_once "core/Database.php";
class BlogModel extends Database
{
    private $conn;

    function __construct()
    {
        $this->conn = new Database();
    }
    public function blog() {
        try {
            $conn = new Database();
            $stmt = $conn->pdo->prepare("SELECT id, author, title, post FROM blogs");
            $stmt->execute();
            // set the resulting array to associative
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $posts = $stmt->fetchAll();
            return $posts;

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function save()
    {
        try {
            $id = $_POST['id'] ?? '';
            $author = $_POST['author'];
            $title = $_POST['title'];
            $post = $_POST['post'];
            if ($id == '') {
                $sql = "INSERT INTO blogs (author, title, post) VALUES ('$author', '$title', '$post')";
            } else {
                $sql = "UPDATE blogs SET title = '$title', post = '$post' WHERE id = '$id'";
            }
            $this->conn->pdo->exec($sql);
            echo "New post created successfully";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function delete()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
        } else {
            return false;
        }
        try {
            $sql = "DELETE FROM blogs WHERE id = '$id'";
            return $this->conn->pdo->exec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}