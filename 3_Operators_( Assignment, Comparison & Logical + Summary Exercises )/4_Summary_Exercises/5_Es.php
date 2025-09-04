<?php

/*

Esercizio 5:

- Un impiegato riceve un bonus se ha lavorato più di 100 ore oppure se il suo fatturato è maggiore di 5000 euro. 
- Crea due variabili per rappresentare queste condizioni e stampare a schermo se ha diritto al bonus

*/

# variable declaration
$hoursOfWork = 234;
$salaryEmployee = 34222;

# condition for receiving the bonus 
if ($hoursOfWork >= 100 || $salaryEmployee >= 5000 ) {
    echo "The employee can receve the bonus!";
} else {
    echo "The employee can't receve the bonus! :(";
}



