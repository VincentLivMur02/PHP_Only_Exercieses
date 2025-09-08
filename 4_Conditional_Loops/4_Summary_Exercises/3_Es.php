<?php

/*

Esercizio 3:

- Un giocatore ha 100 punti vita.

- Se l'azione scelta ("attacco", "difesa", "curati") è "curati", aumenta i punti vita di 20.

- Se l'azione è "attacco", riduci i punti vita di 15.

- Se l'azione è "difesa", non succede nulla.

- Usa uno switch per gestire le azioni e un operatore di assegnazione per aggiornare i punti vita. 

- Stampa il totale dei punti vita dopo l'azione.

*/


$lifePoints = 100;
$playerAction = "Treat";
# curare = Treat 
# difesa = Defence

switch ($lifePoints) {
    case $playerAction === "Attack":
        echo "You choose the action <b>'$playerAction'</b>. 
       Oh Nooo! Now'll lose 15 points of life : <br> 
        Life points before: $lifePoints <br>
        Life points after: " . $lifePoints - 15;
    break;
    case $playerAction === "Defence":
        echo "You choose the action <b>'$playerAction'</b>. <br>
        Life points before: $lifePoints <br>
        Life points after: $lifePoints <br>
        Nothing to change. SURVIVE!!";
    break;
    case $playerAction === "Treat":
        echo "You choose the action <b>'$playerAction'</b>. 
        Good, you'll receive 15 points of life : <br> 
        Life points before: $lifePoints <br>
        Life points after: " . $lifePoints + 20;
    break; 
    default:
        echo "You don't choose any action!";
}



