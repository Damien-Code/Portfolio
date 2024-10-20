<?php

use core\Database;

include_once "core/Database.php";

class profileModel extends Database
{
    private $conn;

    function __construct()
    {
        $this->conn = new Database();
    }


    public function delete()
//        include "Database.php";
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
        } else {
            return false;
        }
        try {
            $sql = "UPDATE posts SET isDeleted = true WHERE id = $id";
//            $conn = new Database();
            return $this->conn->pdo->exec($sql);

        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }


    public function save()
    {
        try {
            $id = $_POST['id'] ?? '';
            $title = $_POST['title'];
            $degree = $_POST['degree'];
            $author = $_POST['author'];
            $projects = $_POST['projects'];
            $lang = $_POST['languages'];
            if ($id == '') {
                $sql = "INSERT INTO posts (Title, Degree, Author, Projects, Languages)
            VALUES ('$title', '$degree', '$author', '$projects', '$lang')";
            } else {
                $sql = "UPDATE posts SET Title = '$title', Degree = '$degree', Author = '$author', Projects = '$projects', Languages = '$lang' WHERE id = $id";
            }
            $this->conn->pdo->exec($sql);
            echo "New record created successfully";

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public function update()
    {
//        global $conn;
//        include "Database.php";
        $ret = '';
        $id = $_GET['id'];
//        $conn = new Database();
        try {
            $sql = "SELECT * FROM posts WHERE id = $id";
//            $conn = new Database();
            $sth = $this->conn->pdo->prepare($sql);
            $sth->execute();
            $ret = $sth->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        return $ret;
    }


    public function view()
    {
        $id = $_GET['id'];
        try {
            $sql = "SELECT Author, Title, Degree, Projects, Languages FROM Posts WHERE id = $id";
            $stmt = $this->conn->pdo->prepare($sql);
            $stmt->execute();
            $ret = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetch();

            return $row;
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}