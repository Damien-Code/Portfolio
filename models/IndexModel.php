<?php

use core\Database;

include_once "core/Database.php";

class IndexModel extends Database
{
    private $conn;

    /**
     * @author Damien-Code
     * @description In deze methode moet de connectie gemaakt worden met de database.
     * @return void
     */
    public function __construct() {
        $this->conn = new Database();
    }

    /**
     * @author Damien-Code
     * @description In deze methode zorg ik ervoor dat alle waardes uit de database gehaald worden en stuur ik door naar de controller.
     * @return array|false|void
     */
    public function index() {
        try {
            $conn = new Database();
            $stmt = $conn->pdo->prepare("SELECT id, Author, Title, Degree, Projects, Languages FROM Posts WHERE isDeleted = 0");
            $stmt->execute();

            // set the resulting array to associative
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $data = $stmt->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}