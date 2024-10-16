<?php
// functie waar in de controller aanstuur. Die functie call ik in switch statement in index.php.
// Ook definieer ik een titel die ik in index.view.php echo
use core\Database;
include "./models/IndexModel.php";
class IndexController {
    public function index() {
        //include "./core/Database.php";
        $title = 'Working with';
        try {
            $conn = new Database();
            $stmt = $conn->pdo->prepare("SELECT id, Author, Title, Degree, Projects, Languages FROM Posts WHERE isDeleted = 0");
            $stmt->execute();

            // set the resulting array to associative
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $data = $stmt->fetchAll();
            include './views/index.view.php';
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }
    public function view($id='')
    {
        $view = new profileModel();
        $view->view($id);
    }
}

