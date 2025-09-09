<?php

/*

Esercizio 6:

- Chiedi all'utente di inserire un voto da 1 a 10. 
- Usando un ciclo do...while, continua a chiedere il voto finché non viene inserito un numero valido (maggiore di 0 e minore di 11).

*/

$userVote = 5;

do {
    $userVote++;
    echo $userVote;
} while ($userVote > 0 && $userVote < 11);

// dubbi 