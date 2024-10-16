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


//    public function ProfileRouter()
//    {
////    Deze variabelen moet ik hier en in de view functie aangeven met global.
////    Ik wil deze variabelen gebruiken zodat de portfolio pagina zich aanpast naar de userID
//        $pagetitle = "My Profile";
//        global $title;
//        global $degree;
//        global $author;
//        global $lang;
//        global $projects;
//        $data = '';
//    }
//    hier call ik de functies die ik in deze file definieer

//        if ($_SERVER["REQUEST_METHOD"] == "POST") {
////            die(var_dump($_POST));
//            switch ($_POST["action"]) {
//                case 'save':
//                    save($_POST['id']);
//                    break;
//                case 'delete':
//                    delete($_POST['id']);
//                    break;
//                case 'update':
//                    $data = update($_POST['id']);
//                    break;
//                case 'view':
//                    view($_POST['id']);
//
////                require 'controller/PortfolioController.php';
////                portfolioController();
//                    break;
//            }
//            }



//            $this->save($_POST['id']);
//        } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
//            $this->delete($_POST['id']);
//        } elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
//            $this->update($_GET['id']);
//        } elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
//            $this->view($_GET['id']);
//        } else
//            require "./views/profileView.php";
//
//
//
//        if (!empty($_GET['action'])) {
//            switch ($_GET['action']) {
//                case 'save':
//                    save($_POST['id']);
//                    break;
//                case 'delete':
//                    delete($_GET['id']);
//                    break;
//                case 'update':
//                    $data = update($_GET['id']);
//                    break;
//                case 'view':
//                    view($_GET['id']);
//
////                require 'controller/PortfolioController.php';
////                portfolioController();
//                    break;
//            }


//    een extra if statement toegevoegd omdat ik anders steeds een undefined array key 'action' error kreeg
//    wel heb ik in deze if statement ervoor gezorgd dat wanneer het bijvoorbeeld delete is, dat hij een andere pagina moet laden.
//    dit heb ik zo gedaan omdat er anders 2 paginas over elkaar heen laadde.
//    Het heeft lang geduurd voordat ik dit heb weten op te lossen.
//
//        if (!empty($_GET['action'])) {
////        die(var_dump($_GET));
//
//            if ($_GET['action'] == 'save') {
//                require "./views/profile.view.php";
//            } elseif ($_GET['action'] == 'delete') {
//                $title = 'Working with';
//                require "./views/index.view.php";
//            } elseif ($_GET['action'] == 'update') {
//                require "./views/profile.view.php";
//            } elseif ($_GET['action'] == 'view') {
//                require "./views/portfolio.view.php";
//            }
//        } else {
//            require "./views/profile.view.php";
//        }
//
//    }


    public function delete($id)
//        include "Database.php";
    {
        try {
            $sql = "UPDATE posts SET isDeleted = true WHERE id = $id";
//            $conn = new Database();
            return $this->conn->pdo->exec($sql);

        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }


    public function save($id = '')
    {
//            include "Database.php";
            try {
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

