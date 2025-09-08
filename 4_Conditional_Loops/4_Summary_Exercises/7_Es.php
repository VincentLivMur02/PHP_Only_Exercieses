<?php

/*

Esercizio 7:

- Un negozio offre uno sconto del 10% a chi spende più di 150 euro. 
- Crea una variabile $spesa_totale e una variabile $ha_tessera_fedelta. 
- Usando l'operatore ternario ? :, calcola il prezzo finale. 
- La condizione per lo sconto è che la spesa sia maggiore di 150 euro oppure che il cliente abbia la tessera fedeltà.

*/

$totalShop = 151;
$shopDiscount = 10; 
$fidelityCard = true;

$messageForCustomer = ( $totalShop > 150 && $fidelityCard === true) ? 
"The customer has entitled to a discount of 10%. <br>
Fidelity card: $fidelityCard. <br> 
Total then: " . $totalShop . "€. <br> 
Total now: " . $totalShop - ( $totalShop * $shopDiscount / 100 ) . "€." :
"The customer hasn't entitled to a discount of 10%.";

echo $messageForCustomer;
