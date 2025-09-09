<?php

/* 

Esercizio 4:

- Simula il lancio di un dado a 6 facce. 
- Usando un ciclo while, continua a lanciare il dado finché non esce il numero 6. 
- Stampa ogni risultato e, alla fine, il numero di lanci necessari.

*/

$dice = 0;
$rolls = 0;
while ($dice !== 6) {
    $dice = rand(1, 6); // Generates a random number from 1 to 6
    $rolls++;
    echo "Roll " . $rolls . ": the result is " . $dice . "<br>";
}
echo "It took " . $rolls . " rolls to get a 6.";