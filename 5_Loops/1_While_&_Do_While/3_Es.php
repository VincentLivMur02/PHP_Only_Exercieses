<?php

/*

Esercizio 3:

- Simula il lancio di una moneta. 
- Usando un ciclo while, continua a "lanciare" la moneta finché non esce "testa". 
- Stampa ogni risultato e, alla fine, il numero di tentativi necessari.

*/

$penny = "head";
$attempts = 0;

while ($attempts < 5 && $penny === "head") {
    echo $attempts;
    $attempts++;
}

echo "Attempts needed: $attempts";

// dubbi...

