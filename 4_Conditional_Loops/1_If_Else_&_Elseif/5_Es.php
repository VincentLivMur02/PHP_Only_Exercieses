<?php

/*

Esercizio 5:

- Un dipendente ha diritto a un bonus se ha lavorato più di 150 ore E il suo fatturato è maggiore di 10000 euro. 
- Crea le variabili necessarie e stampa se ha diritto al bonus o meno.

*/

$hoursOfWork = 156;
$salary = 35000;

if ($hoursOfWork >= 150 && $salary >= 10000) {
    echo "The employee is entitled to a bonus.";
} else {
    echo "The employee isn't entitled to a bonus.";
}



