<?php
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
