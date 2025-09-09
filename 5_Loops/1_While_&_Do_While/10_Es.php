<?php

/*

Esercizio 10:

- Crea una variabile $stipendio con un valore a tua scelta e un'altra variabile $obiettivo con un valore più alto.
- Usando un ciclo while, aumenta lo stipendio del 10% ogni anno finché non raggiunge o supera l'obiettivo. 
- Stampa il numero di anni necessari.

*/

$salary = 3500;
$goal = 10000;

while ($salary) {
    echo $salary * 10 / 100;
    $salary++;
}

// dubbi 