<?php

/*

Esercizio 9:

- Simula il lancio di una moneta. 
- Usando un ciclo do...while, continua a lanciare la moneta finché non esce "testa". 
- Stampa ogni risultato e, alla fine, il numero di tentativi necessari.

*/

$launch = 4;

do {
    $penny = "6";
    if ($penny === "head") {
        echo "You launch the penny $launch times";
    }
    $launch++;
    echo $launch;
} while ($launch < 4);

// dubbi 