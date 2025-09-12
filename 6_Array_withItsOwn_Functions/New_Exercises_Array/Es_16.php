<?php

/*

Esercizio 16:

- Crea un array con una lista di nomi.

- Verifica se il nome "Mario" è presente nell'array e stampa un messaggio appropriato.

- Stampa quanti elementi totali ci sono nell'array, usando la funzione che hai imparato.

*/

$nameList = [
    "Jessica",
    "Emilia",
    "Laura",
    "Luigi",
    "Mario",
    "Marco",
    "Francesco",
    "Maria"
];

echo "Original array: <br>";
print_r($nameList);

foreach ($nameList as $names) {
    if($names = in_array("Mario", $nameList)) {
        echo "$names exists in this array";
    }
}
