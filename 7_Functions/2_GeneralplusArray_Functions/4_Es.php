<?php

/*

Esercizio 4:

- Crea una funzione invertiArray() che accetta un array e restituisce l'array con gli elementi in ordine inverso, senza usare la funzione array_reverse().

*/

function reverseArray($arr) {
    $newArray = [];
    $length = count($arr);
    for ($i = $length - 1; $i >= 0; $i--) {
        $newArray[] = $arr[$i];
    }
    return $newArray;
}
$reversed = reverseArray(["Olivia", "Sophia", "Emily", "Jacob", "Michael"]);
print_r($reversed);