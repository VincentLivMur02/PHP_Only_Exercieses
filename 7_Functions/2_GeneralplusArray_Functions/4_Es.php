<?php

/*

Esercizio 4:

- Crea una funzione invertiArray() che accetta un array e restituisce l'array con gli elementi in ordine inverso, senza usare la funzione array_reverse().

*/

function reverseArr($nameArr) {
    krsort($nameArr); # sort the array by the keys 
    print_r($nameArr);
}

reverseArr(["Olivia", "Sophia", "Emily", "Jacob", "Michael"]);