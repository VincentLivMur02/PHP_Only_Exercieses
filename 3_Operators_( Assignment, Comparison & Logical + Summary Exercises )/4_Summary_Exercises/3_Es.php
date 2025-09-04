<?php

/*

Esercizio 3:

- Chiedi all'utente di inserire la sua età (simula l'input con una variabile). 
- Controlla se la sua età è maggiore di 16 anni e minore di 25. 
- Stampa un messaggio che confermi o meno la condizione.

*/

$input = 45;

if ($input > 16 && $input < 25) {
    echo "Your age is allowed. Access confirmed!";
} else {
    echo "Your age isn't allowed. Access denied!";
}
