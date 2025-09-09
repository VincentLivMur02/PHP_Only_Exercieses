<?php

/*

Esercizio 9:

- Simula un gioco in cui un giocatore ha 50 euro. 
- A ogni round, perde 10 euro finché non gli rimangono 0 euro o meno. 
- Usa un ciclo do...while. 
- Stampa quanti round sono stati giocati e quanti soldi sono rimasti.

*/

$userMoney = 50;
$round = 0;

do {
    $userMoney -= 10;
    $round++;
    echo "Round " . $round . ": you have " . $userMoney . " euros left.<br>";
} while ($userMoney > 0);

echo "The game is over. You have played " . $round . " rounds and you have " . $userMoney . " euros left.";
