<?php

/*

Esercizio 6:

- Crea una variabile $scelta_menu (un numero da 1 a 3).

- Se la scelta è 1, stampa "Hai scelto la pizza margherita.".

- Se la scelta è 2, stampa "Hai scelto la pasta al pesto.".

- Se la scelta è 3, stampa "Hai scelto l'insalata.".

- In ogni altro caso, stampa "Scelta non valida.".

*/

$selectMenu = 1;

switch ($selectMenu) {
    case 1:
        echo "You choose the <b>'Pizza Margherita'</b>";
        break;
    case 2:
        echo "You choose the <b>'Pasta al Pesto'</b>";
        break;
    case 3:
        echo "You choose the <b>'The Cesar's Salad'</b>";
        break;
    default:
        echo "<b>Invalid choice!</b>";
        break;
}




