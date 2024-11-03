<?php

use core\Database;

include_once "core/Database.php";

class profileModel extends Database
{
    private $conn;

    /**
     * @return void
     * @author Damien-Code
     * @description Deze methode zorgt ervoor dat de connectie met de database moet worden uitgevoerd.
     */
    function __construct()
    {
        $this->conn = new Database();
    }


    /**
     * @return false|int|void
     * @author Damien-Code
     * @description Deze methode zorgt ervoor dat er waardes kunnen worden verwijderd.
     * Wel heb ik voor een soft delete gekozen
     */
    public function delete()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
        } else {
            return false;
        }
        try {
            $sql = "UPDATE posts SET isDeleted = true WHERE id = $id";
            return $this->conn->pdo->exec($sql);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    /**
     * @return void
     * @author Damien-Code
     * @description Deze methode zorgt ervoor dat er ingevoerde waardes kunnen worden opgeslagen op de database.
     * Ook heb ik er een update in verwerkt omdat de al ingevoerde waardes ook geupdate moeten worden.
     *
     */
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
                $stmt = $this->conn->pdo->prepare("INSERT INTO posts (Title, Degree, Author, Projects, Languages) VALUES (:title, :degree, :author, :projects, :lang)");
                $stmt->bindParam(':title', $title);
                $stmt->bindParam(':degree', $degree);
                $stmt->bindParam(':author', $author);
                $stmt->bindParam(':projects', $projects);
                $stmt->bindParam(':lang', $lang);
                $stmt->execute();
                echo "New record created successfully";
            } else {
                $stmt = $this->conn->pdo->prepare("UPDATE posts SET Title = :title, Degree = :degree, Author = :author, Projects = :projects, Languages = :lang WHERE id = :id");
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':title', $title);
                $stmt->bindParam(':degree', $degree);
                $stmt->bindParam(':author', $author);
                $stmt->bindParam(':projects', $projects);
                $stmt->bindParam(':lang', $lang);
                $stmt->execute();
                echo "Record updated successfully";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * @return mixed|string
     * @author Damien-Code
     * @description Deze methode zorgt ervoor dat er waardes geupdate kunnen worden.
     */
    public function update()
    {
        $ret = '';
        $id = $_GET['id'];
        try {
            $sql = "SELECT * FROM posts WHERE id = $id";
            $sth = $this->conn->pdo->prepare($sql);
            $sth->execute();
            $ret = $sth->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        return $ret;
    }


    /**
     * @return mixed|void
     * @author Damien-Code
     * @description Deze methode zorgt ervoor dat er ingevoerde waardes uit de database gehaald worden om te laten zien.
     */
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