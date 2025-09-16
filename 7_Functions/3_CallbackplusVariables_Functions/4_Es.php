<?php


/*

Esercizio 4:

- Crea una funzione controllaEStampa() che accetta una variabile come parametro. 
- All'interno, controlla se la variabile non è né null né false e, se è così, la stampa. 
- Altrimenti, stampa "Variabile non valida".

*/

function stampAndControl($var) {
    if($var != null && $var != false) {
        echo "Printed variable!";
    } else {
        echo "Not valid variable!";
    }
}

stampAndControl("");