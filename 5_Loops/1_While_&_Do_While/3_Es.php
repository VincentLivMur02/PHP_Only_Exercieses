<?php

/*

Esercizio 3:

- Simula il lancio di una moneta. 
- Usando un ciclo while, continua a "lanciare" la moneta finché non esce "testa". 
- Stampa ogni risultato e, alla fine, il numero di tentativi necessari.

*/

$result = "head";
$attempts = 0;

while ($result !== "head") {
    $attempts++;

    $result = (rand(0, 1) === 0 ) ? "head" : "cross";

    if ($attempts === 3) {
        $result = "head";
    }
    echo "Attempts " . $attempts . ": " . $result . "<br>";
}

echo "Attempts needed: " . $attempts;



