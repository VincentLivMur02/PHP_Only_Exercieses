<?php

/*

Esercizio 8:

- Hai un capitale di 1000 euro che guadagna il 5% di interessi ogni anno. 
- Usando un ciclo while, calcola quanti anni ci vorranno per superare i 2000 euro. 
- Stampa il numero di anni alla fine.

*/

$capital = 1000;
$years = 0;

while ($capital < 2000) {
    $interests = $capital * 5 / 100;
    $capital += $interests;
    $years++;
}

echo "It will take " . $years . " years to exceed 2000€.";



