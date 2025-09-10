<?php

/*

Esercizio 2:

- Hai un conto con 100 euro. 
- Preleva 20 euro. Usando un ciclo do...while, continua a prelevare 20 euro finché il saldo non è inferiore a 20. 
- Stampa il saldo finale e il numero di prelievi effettuati.

*/

$wallet = 100;

do {
    $wallet -= 20;
    echo "You have less than 20 euros. You have left: " . $wallet . "€";
} while ($wallet >= 20);