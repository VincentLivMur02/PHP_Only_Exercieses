<?php

/*

Esercizio 1:

- Crea una variabile $giorno_settimana e assegnale un numero da 1 a 7 (1 per lunedì, 2 per martedì, ecc.). - Usando uno switch, stampa il nome del giorno corrispondente.

*/

$dayOfTheWeek = 3;

switch ($dayOfTheWeek) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7: 
        echo "Sunday";
        break;
    default: 
        echo "Non è un giorno della settiamana";
        break; 
}



