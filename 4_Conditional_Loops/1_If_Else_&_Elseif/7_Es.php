<?php

/*

Esercizio 7:

- Una persona ha diritto a uno sconto del 10% se ha una spesa superiore a 50 euro E una tessera fedeltà. 
- Crea le variabili e calcola il prezzo finale. 
- Se non ha diritto allo sconto, stampa solo il prezzo iniziale.

*/

# create 3 variables 
$maxShopPrice = 143;
$shopDiscount = 10;
$fidelityCard = true; # important if the person have it 

if ( $maxShopPrice > 50 && $fidelityCard === true ) {
    echo "The person has entitled to a discount of 10%! </br>
    The price now is : " . 
    $maxShopPrice * $shopDiscount / 100 . "€"; # added the total for the disocunt ( it's a plus )
} else {
    echo "The price is : " . $maxShopPrice . "€"; # final price if the person doesn't passed the "control"
}
