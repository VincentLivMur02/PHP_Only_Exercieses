<?php

/*

Esercizio 10:

- Crea una funzione applicaSconto() che accetta un array di prezzi e una percentuale di sconto. 
- La funzione deve restituire un nuovo array con i prezzi aggiornati dopo l'applicazione dello sconto.

*/

function applyDiscount($arrPrices, $discount) {
    $newArray = [];
    foreach($arrPrices as $price){
        $discountedPrice = $price - ($price * $discount / 100);
        $newArray[] = $discountedPrice;
    }
    return $newArray;
}
$discountedPrices = applyDiscount([38.90, 40, 874.00, 1000, 5], 10);
print_r($discountedPrices);