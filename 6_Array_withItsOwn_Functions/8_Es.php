<?php

/*

Esercizio 8:

- Hai un array associativo dove le chiavi sono i nomi dei prodotti e i valori sono i loro prezzi. 
- Stampa solo i nomi dei prodotti il cui prezzo è inferiore a 20.

*/

$products = [
    "Pc Gaming" => 6000,
    "Gum" => 0.5,
    "TV" => 9000,
    "Pencil" => 13,
    "Phone" => 1023,
    "Book" => 3
];
ksort($products);
print_r($products);

