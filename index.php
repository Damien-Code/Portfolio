<?php
switch ($_SERVER = ['REQUEST_URI']) {
    case '/':
        require 'views/index.view.php';
        break;
    case '/about':
        require 'views/about.view.php';
        break;
    case '/process':
        require 'views/process.view.php';
        break;
    case '/work':
        require 'views/work.view.php';
        break;
    default:
        echo 'Error 404';
}

?>

/*
* Opdracht 1.
* Maak een array van getallen(bijv. [2, 4, 6, 8, 10]).
* Gebruik een foreach loop om de waarden van de array
* te verdubbelen en de resultaten in een nieuwe array
* op te slaan. Laat beide arrays zien.
*
* Opdracht 2.
* Maak een array met 5 verschillende namen.
* Gebruik een for loop om deze namen in omgekeerde
* volgorde af te drukken.
*
* Opdracht 3.
* Schrijf een array met willekeurige getallen.
* Gebruik een foreach loop om de som van alle even
* getallen in de array te berekenen en weer te geven.
*/

<?php

$array = [2, 4, 6, 8, 10];
$newArray = [];
foreach($array as $value) {
    array_push($newArray, $value * 2);
}

print_r($newArray);

$names = ["Damiën", "Lucas", "Mischa", "Willem", "Jan"];
for($i = 5; $i >= count($names); $i--) {
    echo ($names[$i]);
}



