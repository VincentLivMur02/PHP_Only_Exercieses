<?php

/*

Esercizio 6:

- Hai una variabile $stipendio con valore 1800. 
- Se lo stipendio è minore di 2000 euro, aumentalo del 5%. 
- Usa un if per la condizione e un operatore di assegnazione per l'aumento. 
- Stampa il nuovo stipendio.

*/

$salary = 3800;

if ( $salary < 2000 ) {
    echo $salary += ($salary * 5) / 100; # retrun the 5% on the salary
} else { 
    echo "You're too rich. Go way! :)"; # message for the over salary
}

