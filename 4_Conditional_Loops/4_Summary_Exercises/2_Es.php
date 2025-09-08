<?php

/*

Esercizio 2:

- Un cliente ha diritto a uno sconto del 20% se la sua spesa totale è superiore a 200 euro e se è un membro VIP. 
- Altrimenti, se la sua spesa è superiore a 100 euro, ha uno sconto del 10%. 
- In tutti gli altri casi, non ha sconti. Calcola e stampa il prezzo finale.

*/

$shopOf200 = 200;
$discountOf20 = 20;
$shopOf100 = 100;
$discountOf10 = 10;
$VIPMember = false;
$totalShop = 400;

if ( $totalShop > $shopOf200 && $VIPMember === true ) {
    echo "The client has entitled to a discount of 20%. <br> 
    VIP member card: " . $VIPMember . "<br> 
    Total shop: " . $totalShop . "€.<br> 
    Discount: " . $totalShop * $discountOf20 / 100 . "€. 
    Total now: " . $totalShop - ( $totalShop * $discountOf20 / 100 ) . "€.";
} elseif ( $totalShop > $shopOf100) { 
    echo "The client has entitled to a discount of 10%. <br>
    VIP member card: " . $VIPMember . "<br> 
    Total shop: " . $totalShop . "€.<br> 
    Discount: " . $totalShop * $discountOf10 / 100 . "€.<br> 
    Total now: " . $totalShop - ( $totalShop * $discountOf10 / 100 ) . "€.";
} else {
    echo "The client hasn't entitled to a discount!";
}




