<?php
//hier maak ik connectie met de database
//inplaats van in elke functie een connectie te moeten maken kan ik nu gemakkelijk deze file includen.
namespace core;
class Database
{
    public $pdo;
    /**
     * @author Damien-Code
     * @description In deze contruct methode maak ik connectie met de database.
     * Deze methode gebruik ik daarna in elke model zodat ik niet steeds code moet herhalen
     * @return void
     */
    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "portfolioDamienCode";
//        $dbname = "pa";
        $options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->pdo = new \PDO("mysql:host=$servername;dbname=$dbname", $username, $password, $options);
        } catch
        (\PDOException $e) {
            echo "Database Error:" . $e->getMessage();
        }
    }
}


