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

    public function view($id = null)
    {
//        global $conn;
        global $author;
        global $title;
        global $degree;
        global $projects;
        global $lang;
//        include "Database.php";
        try {
            $sql = "SELECT Author, Title, Degree, Projects, Languages FROM Posts WHERE id = $id";
//            $conn = new Database();
            $stmt = $this->conn->pdo->prepare($sql);
            $stmt->execute();
            $ret = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            foreach ($stmt->fetchAll() as $row) {
                foreach ($row as $key => $value) {
                }
            }
//        implode('', $row);
            $author = $row['Author'];
            $title = $row['Title'];
            $degree = $row['Degree'];
            $projects = $row['Projects'];
            $lang = $row['Languages'];

        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

}