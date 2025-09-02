<?php

/*

Esercizio 4: 

- Crea due variabili: $totale_mele con valore 17 e $numero_bambini con valore 5. 
- Usa l'operatore % per calcolare quante mele rimangono dopo averle divise equamente tra i bambini.
- Stampa il risultato.

*/

$totalApples = 17;
$childrenNum = 5;

$equalDiv = $totalApples / $childrenNum;
$result = $totalApples % $childrenNum; 

echo "Ogni bambino avrà a testa: $equalDiv mele", PHP_EOL; # divisione equa tra i bambini 
echo "Rimangono $result mele"; # risultato delle mele dopo averle divise equamente tra i bambini

// come faccio ad avere un numero intero qui: echo "Ogni bambino avrà a testa: $equalDiv mele"; ? 