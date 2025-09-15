<?php

/*

Esercizio 2:

- Crea una funzione trovaMassimo() che accetta un array di numeri e restituisce il numero più grande al suo interno.

*/

function findMaximum($arr) {
    return max($arr); // Function that returns the highest value
}
echo "The largest number is: " . findMaximum([23, 768, 67, 849, 34]);
