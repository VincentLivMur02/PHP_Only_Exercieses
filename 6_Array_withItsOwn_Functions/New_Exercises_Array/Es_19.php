<?php

/*

Esercizio 19:

- Hai un array con 5 prodotti.

- Crea un nuovo array rimuovendo il secondo e il terzo elemento dall'array originale.

*/

$prod = [
    "Mouse",
    "IPad",
    "Pasta",
    "Pizza",
    "Wine"
];

$slicedArr = array_slice($prod, 1, 2);

var_dump($slicedArr);