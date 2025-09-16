<?php


/*

Esercizio 4:

- Crea una funzione controllaEStampa() che accetta una variabile come parametro. 
- All'interno, controlla se la variabile non è né null né false e, se è così, la stampa. 
- Altrimenti, stampa "Variabile non valida".

*/

function printAndCalculate($var) {
    if (!empty($var)) { // If the variable is NOT empty...
        echo "The variable is valid: " . $var;
    } else {
        echo "Invalid variable!";
    }
}

printECalculate("text"); // Output: The variable is valid: text
printECalculate(0); // Output: Invalid variable!