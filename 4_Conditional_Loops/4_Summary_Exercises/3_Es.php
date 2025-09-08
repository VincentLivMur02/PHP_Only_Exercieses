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

switch ($playerAction) { 
    case "Attack":
        $lifePoints -= 15; 
        echo "You chose the action 'Attack'. You'll lose 15 life points. New life points: " . $lifePoints;
        break;
    case "Defence":
        echo "You chose the action 'Defence'. Your life points: " . $lifePoints;
        break;
    case "Treat":
        $lifePoints += 20;
        echo "You chose the action 'Treat'. You'll gain 20 life points. New life points: " . $lifePoints;
        break;
    default:
        echo "Invalid action.";
        break;
}

