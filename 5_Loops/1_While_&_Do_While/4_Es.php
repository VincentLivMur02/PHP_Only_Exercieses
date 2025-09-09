<?php

/*

Esercizio 4:

- Un sito web ha 100 utenti. 
- Usando un ciclo while, calcola quanti mesi ci vorranno per raggiungere 500 utenti, sapendo che ogni mese il numero di utenti raddoppia. 
- Stampa il numero di mesi alla fine.

*/

$users = 100;
$months = 0;

while ($users < 500) {
     $users *= 2; # double the users
     $months++; # increment the counter of the months
}

echo "It will take " . $months . " months to reach 500 users.";


