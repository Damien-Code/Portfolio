<?php
// functie waar in de controller aanstuur. Die functie call ik in switch statement in index.php.
function ProfileController()
{
//    Deze variabelen moet ik hier en in de view functie aangeven met global.
//    Ik wil deze variabelen gebruiken zodat de portfolio pagina zich aanpast naar de userID
    $pagetitle = "My Profile";
    global $title;
    global $degree;
    global $author;
    global $lang;
    global $projects;
    $data = '';
//    hier call ik de functies die ik in deze file definieer
    if (!empty($_GET['action'])) {
        switch ($_GET['action']) {
            case 'save':
                save($_POST['id']);
                break;
            case 'delete':
                delete($_GET['id']);
                break;
            case 'update':
                $data = update($_GET['id']);
                break;
            case 'view':
                view($_GET['id']);
//                require 'controller/PortfolioController.php';
//                portfolioController();
                break;
        }
    }

//    een extra if statement toegevoegd omdat ik anders steeds een undefined array key 'action' error kreeg
//    wel heb ik in deze if statement ervoor gezorgd dat wanneer het bijvoorbeeld delete is, dat hij een andere pagina moet laden.
//    dit heb ik zo gedaan omdat er anders 2 paginas over elkaar heen laadde.
//    Het heeft lang geduurd voordat ik dit heb weten op te lossen.
//
    if (!empty($_GET['action'])) {
//        die(var_dump($_GET));

        if ($_GET['action'] == 'save') {
            require "./views/profile.view.php";
        } elseif ($_GET['action'] == 'delete') {
            $title = 'Working with';
            require "./views/index.view.php";
        } elseif ($_GET['action'] == 'update') {
            require "./views/profile.view.php";
        } elseif ($_GET['action'] == 'view') {
            require "./views/portfolio.view.php";
        }
    } else {
        require "./views/profile.view.php";
    }

}

//een functie waarbij ik waardes uit de database kan verwijderen.
//Ik moet wel de "database.php" includen omdat er anders geen connectie gemaakt wordt met de database.
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


//een functie waarbij ik ingevoerde waardes in een form kan toevoegen aan de database.
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

//een functie waarbij ik de ingevoerde waardes zou kunnen updaten.
//wel wil ik maar 1 gekozen id updated en niet alle. Daarom gebruik ik WHERE id = $id
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

//een functie waarbij ik er voor heb gezorgd dat je een portfolio kunt bekijken.
//Ik wilde wel dat ik waardes van een id gelijk stelde aan een variabel zodat ik deze kan gebruiken op de portfolio pagina
//door middel van global is het mij uiteindelijk gelukt om deze waardes uit deze functie te halen
//ik roep deze variabelen in de profile functie aan zodat deze variabelen te zien zijn via de gekozen portfolio
//anders is de portfolio pagina ingeladen met mijn eigen waardes die ik weer in PortfolioController aanroep.
function view($id = null)
{
    global $conn;
    global $author;
    global $title;
    global $degree;
    global $projects;
    global $lang;
    include "database.php";
    try {
        $sql = "SELECT Author, Title, Degree, Projects, Languages FROM posts WHERE id = $id";
        $stmt = $conn->prepare($sql);
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