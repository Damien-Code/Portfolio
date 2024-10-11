<?php
//hier maak ik connectie met de database
//inplaats van in elke functie een connectie te moeten maken kan ik nu gemakkelijk deze file includen.
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pa";
$conn = null;
$sql = '';
//if (!empty($_POST['title'])) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Database Error:" . $e->getMessage();
    }
