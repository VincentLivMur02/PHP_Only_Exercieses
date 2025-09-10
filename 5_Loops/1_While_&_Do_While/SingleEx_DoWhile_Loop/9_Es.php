<?php

/*

Esercizio 9:

- Simula il lancio di una moneta. 
- Usando un ciclo do...while, continua a lanciare la moneta finché non esce "testa". 
- Stampa ogni risultato e, alla fine, il numero di tentativi necessari.

*/

$result = "tails";
$attempts = 0;

do {
    $attempts++;
    $result = (rand(0, 1) === 0) ? "heads" : "tail"; // Simulate the toss
    echo "Toss " . $attempts . ": the result is " . $result . "<br>";
} while ($result !== "heads");

echo "It took " . $attempts . " tosses to get “heads”.";