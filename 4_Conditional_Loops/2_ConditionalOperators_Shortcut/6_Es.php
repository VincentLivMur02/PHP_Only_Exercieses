<?php

/*

Esercizio 6:

- Se un giocatore ha meno di 100 punti esperienza, stampa "Livello 1", altrimenti "Livello 2". 
- Usa l'operatore ternario.

*/

$experiencePoints = 230;

$messageToPlayer = ($experiencePoints < 100) ? 
"You've $experiencePoints, so you're at level 1 of the game!" :
"You've $experiencePoints, so you're at level 2 of the game!";

echo $messageToPlayer;


