<?php

/*

Esercizio 7:

- Un cliente ha diritto a uno sconto del 10% se la sua spesa totale è superiore a 50 euro oppure se è un membro "Gold". 
- Altrimenti, non ha diritto a sconti. 
- Stampa il prezzo finale dopo lo sconto.

*/

$totalCart = 0;
$memberdGold = false;

if ($totalCart > 50 || $memberdGold === true ) {
   echo "Total cart is " . $totalCart . "€. The client has entitled to a 10% of discount : " . $totalCart += ($totalCart * 10) / 100; # added the calculation of the 10% in addition to the simplified sentence
} else {
    echo "The client hasn't entitled to a 10% of discount!"; # message of error for the both variables 
}