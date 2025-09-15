<?php

/*

Esercizio 3:

- Crea una funzione filtraPari() che accetta un array di numeri.
- La funzione deve restituire un nuovo array che contiene solo i numeri pari dell'array originale

*/

function filterEvenNumbers($arr) {
    $newArray = []; // Create an empty array
    foreach ($arr as $num){
        if ($num % 2 == 0) {
            $newArray[] = $num; // Add the even number to the new array
        }
    }
    return $newArray;
}
$evenNumbers = filterEven([1,2,3,4,5,6,7,8,9,10]);
print_r($evenNumbers);

