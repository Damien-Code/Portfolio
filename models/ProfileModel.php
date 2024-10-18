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
//            include "Database.php";
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
//                $conn = new Database();
                $this->conn->pdo->exec($sql);
                echo "New record created successfully";

            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
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
//        global $conn;
//        global $author;
//        global $title;
//        global $degree;
//        global $projects;
//        global $lang;
//        include "Database.php";
        try {
            $sql = "SELECT Author, Title, Degree, Projects, Languages FROM Posts WHERE id = $id";
//            $conn = new Database();
            $stmt = $this->conn->pdo->prepare($sql);
            $stmt->execute();
            $ret = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetch();
//            foreach ($stmt->fetchAll() as $row) {
//                foreach ($row as $key => $value) {
//                }
//            }
//        implode('', $row);
//            $author = $row['Author'];
//            $title = $row['Title'];
//            $degree = $row['Degree'];
//            $projects = $row['Projects'];
//            $lang = $row['Languages'];
//
            return $row;
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}

