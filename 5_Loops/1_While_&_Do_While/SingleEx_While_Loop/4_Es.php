<?php

/* 

Esercizio 4:

- Simula il lancio di un dado a 6 facce. 
- Usando un ciclo while, continua a lanciare il dado finché non esce il numero 6. 
- Stampa ogni risultato e, alla fine, il numero di lanci necessari.

*/

$throws = 0;

while ($throws < 6) {
    $throws++;
    echo $throws . "</br>";
}

echo "We need : " . $throws . " throws";

// dubbi...