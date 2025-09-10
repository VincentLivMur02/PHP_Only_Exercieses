<?php

/*

Esercizio 4:

- Hai un array di prezzi di prodotti: [50, 120, 75, 200]. 
- Stampa ogni prezzo con uno sconto del 10%.

*/

$productsArr = array(50, 120, 75, 200); # array
$discountOfEveryProd = 10; # 10% 

foreach ( $productsArr as $product ) {
    echo "The discount of 10% of " . $product . "€ is : " . $product * $discountOfEveryProd / 100 . "€.<br>";
}

