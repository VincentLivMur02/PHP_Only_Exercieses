<?php

/*

Esercizio 10:

- Un giocatore può scegliere un'azione in un gioco tramite un input. 
- Crea una variabile $azione_giocatore con una stringa ("attacca", "difendi", "scappa"). Usando uno switch, stampa la conseguenza di ogni azione.

*/

$actionPlayer = "Run away";

switch ($actionPlayer) {
    case "Attack":
        echo"<b>$actionPlayer</b>: Attack the enemie's village!";
        break;
    case "Defend":
        echo"<b>$actionPlayer</b>: Defend the base from the enemies!";
        break;
    case "Run away":
        echo"<b>$actionPlayer</b>: Run away! They're too strong for us!";
        break;
    default:
        echo "This attack doesn't exist!";
        break;
}


