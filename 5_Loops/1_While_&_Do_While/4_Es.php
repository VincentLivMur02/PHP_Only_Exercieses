<?php

/*

Esercizio 4:

- Un sito web ha 100 utenti. 
- Usando un ciclo while, calcola quanti mesi ci vorranno per raggiungere 500 utenti, sapendo che ogni mese il numero di utenti raddoppia. 
- Stampa il numero di mesi alla fine.

*/

$webSiteUsers = 100;
$monthSiteUsers = $webSiteUsers * 2;

while ($monthSiteUsers < 5) {
     $monthSiteUsers++;
}

echo $monthSiteUsers;

// dubbi
