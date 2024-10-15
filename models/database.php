<?php
//hier maak ik connectie met de database
//inplaats van in elke functie een connectie te moeten maken kan ik nu gemakkelijk deze file includen.
class Database
{
    public PDO $pdo;

    public function __construct()
    {
     $servername = "localhost";
     $username = "root";
     $password = "root";
     $dbname = "pa";
//     $conn;
        $options = [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, $options);
        } catch
        (PDOException $e) {
            echo "Database Error:" . $e->getMessage();
        }
    }
}


