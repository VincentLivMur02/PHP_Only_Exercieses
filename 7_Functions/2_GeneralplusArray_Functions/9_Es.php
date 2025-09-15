<?php

/*

Esercizio 9:

- Crea una funzione creaArrayCasuale() che accetta un numero intero N come parametro. 
- La funzione deve creare e restituire un array di N numeri casuali tra 1 e 100.

*/

function createRandomArray($n) {
    $newArray = [];
    for ($i = 0; $i < $n; $i++) {
        $randomNumber = rand(1, 100);
        $newArray[] = $randomNumber;
    }
    return $newArray;
}
$array = createRandomArray(10);
print_r($array);