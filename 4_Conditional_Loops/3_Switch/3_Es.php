<?php

/*

Esercizio 3:

- Crea una variabile $colore e assegnale un valore ("rosso", "giallo", "verde").
- Usando uno switch, stampa un messaggio appropriato per ogni colore (es. "Fermati!" per il rosso).

*/

$color = "Green";

switch ($color) {
    case "Green";
        echo "You can go!";
        break;
    case "Yellow";
        echo "Pay attention!";
        break;
    case "Red";
        echo "Please stop!";
        break;
    default:
        echo "We don't need this color";
        break;
}

