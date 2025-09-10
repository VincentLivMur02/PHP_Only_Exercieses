<?php

/*

Esercizio 6:

- Conta quanti elementi ci sono in un array senza usare la funzione count(). 
- Crea un contatore e incrementalo in un ciclo foreach.

*/

$arrayCar = ["Toyota", "Ferrari", "Porsche", "Mazda"];
$counter = 0;

# creation of a foreach loop 
foreach ($arrayCar as $cars) {
    $counter++; # Increases the counter with each iteration
}
echo "The array contains " . $counter . " elements.";