<?php

/*

Esercizio 10:

- Hai un array di prezzi: [10, 20, 30]. 
- Aumenta ogni prezzo del 25% e stampa il nuovo array.

*/

$pricesArr = [10, 20, 30];
$discountPlus = 25;

foreach ($pricesArr as $price) {
    echo "Initial price: " . $price . "€. 
    Now the price with 25% extra is: " . $price + ( $price * $discountPlus ) / 100 . "€<br>";
}