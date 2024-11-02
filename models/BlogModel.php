<?php

use core\Database;

include_once "core/Database.php";

class BlogModel extends Database
{
    private $conn;

    /**
     * @return void
     * @author Damien-Code
     * @description In deze methode moet de database connectie uitgevoerd worden
     */
    function __construct()
    {
        $this->conn = new Database();
    }

    /**
     * @return array|false|void
     * @author Damien-Code
     * @description In deze methode zorg ik ervoor dat de opgeslagen waardes uit de database gehaald worden.
     * Deze waardes stop ik in een property die ik naar de blogcontroller stuur.
     */
    public function blog()
    {
        try {
            $conn = new Database();
            $stmt = $conn->pdo->prepare("SELECT id, author, title, post FROM blogs WHERE isDeleted = 0");
            $stmt->execute();
            // set the resulting array to associative
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $posts = $stmt->fetchAll();
            return $posts;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    /**
     * @return void
     * @author Damien-Code
     * @description In deze methode zorg ik ervoor dat ingevoerde waardes opgeslagen worden in de database.
     * Ook heb ik hier een update in verwerkt omdat ingevoerde waardes ook geupdate moeten worden.
     */
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
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * @return false|int|void
     * @author Damien-Code
     * @description Deze methode zorgt ervoor dat een bepaalde waarde in de database kan worden verwijderd.
     * Wel heb ik voor een soft delete gekozen en dat heb ik gedaan met isDeleted als boolean
     */
    public function delete()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
        } else {
            return false;
        }
        try {
            $sql = "UPDATE blogs SET isDeleted = true WHERE id = $id";
            return $this->conn->pdo->exec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}