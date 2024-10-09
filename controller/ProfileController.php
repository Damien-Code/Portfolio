<?php
// functie waar in de controller aanstuur. Die functie call ik in switch statement in index.php.
// Ook definieer ik een titel die ik in profile.view.php echo
function ProfileController()
{
    $title = "My Profile";
    $data = '';
    if (!empty($_GET['action'])) {
        switch ($_GET['action']) {
            case 'save':
                save($_POST['id']);
                break;
            case 'delete':
                delete($_GET['id']);
//                require 'controller/IndexController.php';
//                indexController();
                break;
            case 'update':
                $data = update($_GET['id']);
                break;
            case 'view':
                view($_GET['id']);
                break;
        }
    }
    require "./views/profile.view.php";
}

function delete($id)
{
    include "database.php";
    try {
        $sql = "DELETE FROM posts WHERE id = $id";
        $conn->exec($sql);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

;
function save($id = '')
{
    global $conn;
    if (!empty($_POST['title'])) {
        include "database.php";
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
            $conn->exec($sql);
            echo "New record created successfully";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}

function update($id = null)
{
    global $conn;
    include "database.php";
    $ret = '';
    try {
        $sql = "SELECT * FROM posts WHERE id = $id";
        $sth = $conn->prepare($sql);
        $sth->execute();
        $ret = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    return $ret;
}


function view($id = null): void
{
    global $conn;
    include "database.php";
        $stmt = $conn->prepare("SELECT Author, Title, Degree, Projects, Languages FROM Posts WHERE id = $id");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach ($stmt->fetchAll() as $row) {
            foreach ($row as $key => $value) {
                echo $value . '<br>';
            }
        }
    }