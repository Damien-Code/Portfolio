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
    public function view()
    {
        try {
            $stmt = $this->conn->pdo->prepare("SELECT id, author, title, post FROM blogs");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function save()
    {
        $id = $_POST['id'] ?? '';
        if (!empty($_POST['title'])) {
            try {
                $author = $_POST['author'];
                $title = $_POST['title'];
                $post = $_POST['post'];
                if ($id == '') {
                    $sql = "INSERT INTO blogs (author, title, post) VALUES ('$author', '$title', '$post')";
                } else {
                    $sql = "UPDATE blogs SET title = '$title', post = '$post' WHERE id = '$id'";
                }
                $this->conn->exec($sql);
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