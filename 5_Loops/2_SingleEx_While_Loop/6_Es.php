<?php

/*

Esercizio 6:

- Hai un portafoglio con 100 euro. 
- Usando un ciclo while, continua a "spendere" 15 euro alla volta finché non ti rimangono meno di 15 euro. 
- Stampa quanti soldi ti sono rimasti.

*/

$wallet = 100;


while ($wallet > 0) {
    $wallet-=15;
    echo $wallet . "<br>";
}

echo "In my wallet i have: " . $wallet . "€";

// dubbi