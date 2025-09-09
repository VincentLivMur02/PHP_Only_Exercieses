<?php

/*

Esercizio 6:

- Chiedi all'utente di inserire un voto da 1 a 10. 
- Usando un ciclo do...while, continua a chiedere il voto finché non viene inserito un numero valido (maggiore di 0 e minore di 11).

*/

$userVote = 0;

do {
    $userVote = rand(1, 15);
    echo "You have entered the vote: " . $userVote . "<br>";
} while ($userVote > 10 || $userVote < 1);

echo "You have entered a valid vote: " . $userVote;