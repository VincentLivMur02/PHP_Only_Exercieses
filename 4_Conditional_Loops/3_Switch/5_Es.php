<?php

/*

Esercizio 5:

- Crea una variabile $pianeta e assegnale il nome di un pianeta. 
- Usando uno switch, stampa "Il pianeta [nome] è il primo/secondo/terzo..." del sistema solare. 
- Per i pianeti non elencati, stampa un messaggio di default.

*/

$planet = "Moon";

switch ($planet) {
    case "Earth":
        echo "The planet $planet is the first of the solar system";
        break;
    case "Saturn":
        echo "The planet $planet is the second of the solar system";
        break;
    case "Moon": 
        echo "The planet $planet is the third of the solar system";
        break;
    case "Jupiter":
        echo "The planet $planet is the fourth of the solar system";
        break;
    default:
        echo "Planet not found";
        break;
}




