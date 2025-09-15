<?php

/*

Esercizio 10:

- Crea una funzione applicaSconto() che accetta un array di prezzi e una percentuale di sconto. 
- La funzione deve restituire un nuovo array con i prezzi aggiornati dopo l'applicazione dello sconto.

*/

function discount($arrPrices = [38.90, 40, 874.00, 1000, 5], $discount = 10){
    foreach($arrPrices as $price){
        print_r($price * $discount / 100);
    }
}
discount();

// dubbi