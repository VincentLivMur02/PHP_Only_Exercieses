<?php

/*

Esercizio 8:

- Inizia con due variabili $a = 0 e $b = 1. 
- Usando un ciclo while, calcola e stampa i primi 10 numeri della sequenza di Fibonacci (ogni numero è la somma dei due precedenti).

*/

# variable decalaration
$a = 0;
$b = 1;

$counter = 0;
while ($counter < 10) {
    echo $a . "<br>";
    $next = $a + $b;
    $a = $b;
    $b = $next;
    $counter++;
}