<?php

/*

Esercizio 9:

- Un anno è bisestile se è divisibile per 4, tranne i secoli (divisibili per 100) che non sono anche divisibili per 400. 
- Crea una variabile $anno (es. 2024) e verifica se è bisestile. 
- Stampa il risultato.

*/

$year = 2024;

if ( $year % 4 ) { # divisible by 4
    echo "The $year is a leap year"; # first case
} else {
    echo "The $year isn't a leap year"; # last case
}


