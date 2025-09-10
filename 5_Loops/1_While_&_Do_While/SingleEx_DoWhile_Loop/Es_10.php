<?php

/*

Esercizio 10:

- Un prodotto ha un prezzo iniziale di 100 euro. 
- A ogni round, il prezzo scende di 5 euro. 
- Usando un ciclo do...while, continua a ribassare il prezzo finché non è inferiore a 70 euro. 
- Stampa il prezzo finale.

*/

$price = 100;
do {
    $price -= 5;
    echo "The price has dropped to: " . $price . "£.<br>";
} while ($price > 70);

echo "The final price is: " . $price . "£.";