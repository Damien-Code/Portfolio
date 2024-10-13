<?php
// functie waar in de controller aanstuur. Die functie call ik in switch statement in index.php.
// Ook definieer ik een titel die ik in blog.view.php echo
function blogController(){
    $title = "Blog";
//    require "views/blog.view.php";
    if (!empty($_GET['action'])) {
        switch ($_GET['action']) {
            case 'save':
                save($_POST['id']);
                break;
            case 'delete':
                delete($_GET['id']);
                break;
        }
    } require "views/blog.view.php";
}

function save($id = '') {
    global $conn;
    if (!empty($_POST['title'])) {
        include "database.php";
        try {
            $author = $_POST['author'];
            $title = $_POST['title'];
            $post = $_POST['post'];
            if ($id == '') {
                $sql = "INSERT INTO blogs (author, title, post) VALUES ('$author', '$title', '$post')";
            } else {
                $sql = "UPDATE blogs SET title = '$title', post = '$post' WHERE id = '$id'";
            }
            $conn->exec($sql);
            echo "New post created successfully";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}