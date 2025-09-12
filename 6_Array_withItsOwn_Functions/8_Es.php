<?php

/*

Esercizio 8:

- Hai un array associativo dove le chiavi sono i nomi dei prodotti e i valori sono i loro prezzi. 
- Stampa solo i nomi dei prodotti il cui prezzo è inferiore a 20.

*/

$products = [
    "Gaming PC" => 6000,
    "Gum" => 0.5,
    "TV" => 9000,
    "Pencil" => 13,
    "Phone" => 1023,
    "Book" => 3
];

echo "Products priced below €20:<br>";

// Scans the array, accessing each key ($name) and each value ($price)
foreach ($products as $name => $price) {
    // Checks if the price is less than 20
    if ($price < 20) {
        // If the condition is true, prints the product name
        echo "- " . $name . " (price: " . $price . "€)<br>";
    }
}


