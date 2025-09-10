<?php

/*

Esercizio 10:

- Un prodotto ha un prezzo iniziale di 100 euro. 
- A ogni round, il prezzo scende di 5 euro. 
- Usando un ciclo do...while, continua a ribassare il prezzo finché non è inferiore a 70 euro. 
- Stampa il prezzo finale.

*/

$totalPrice = 100;
$round = 5;

do {
    $totalPrice -= $round;
    $totalPrice--;
    echo "Final price is: " . $totalPrice . "€.";
} while($totalPrice);

// dubbi 