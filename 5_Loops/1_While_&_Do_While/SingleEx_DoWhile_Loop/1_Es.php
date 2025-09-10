<?php

/*

Esercizio 1:

- Scegli un numero segreto (es. 7). 
- Chiedi a un utente di indovinarlo (simulando l'input). 
- Usando un ciclo do...while, continua a chiedere finché non indovina il numero. 
- Stampa un messaggio "Hai indovinato!" alla fine.

*/

$secretNum = 7;

do {
    $secretNum++;
    echo "Guess the number: " . $secretNum;
} while ($secretNum);

// dubbi