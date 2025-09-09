<?php

/*

Esercizio 6:

- Hai un portafoglio con 100 euro. 
- Usando un ciclo while, continua a "spendere" 15 euro alla volta finché non ti rimangono meno di 15 euro. 
- Stampa quanti soldi ti sono rimasti.

*/

$wallet = 100;
while ($wallet >= 15) { // the cycle continues until the wallet has at least 15 euros
    $wallet -= 15;
    echo "You have spent 15 euros. You have left: " . $wallet . "€<br>";
}
echo "You have less than 15 euros. You have left: " . $wallet . "€";