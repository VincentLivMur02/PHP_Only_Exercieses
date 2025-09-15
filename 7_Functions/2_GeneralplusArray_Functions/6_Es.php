<?php

/*

Esercizio 6:

- Crea una funzione contaOccorrenze() che accetta due parametri: un array e un valore. 
- La funzione deve restituire il numero di volte che quel valore appare nell'array.

*/

function countOccurence($arr) {

    print_r(array_count_values($arr));
}

countOccurence([11, 234, "bread", 56, 85959, 33992,"apple", "banana", 11, 34]);