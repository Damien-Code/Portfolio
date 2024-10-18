<?php
use \core\Database;
include_once "./core/Database.php";
class IndexModel
{
    public function update($id = null)
    {
//        global $conn;
//        include "Database.php";
        $ret = '';
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



}