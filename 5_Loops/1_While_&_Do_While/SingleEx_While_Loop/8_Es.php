<?php

/*

Esercizio 8:

- Inizia con due variabili $a = 0 e $b = 1. 
- Usando un ciclo while, calcola e stampa i primi 10 numeri della sequenza di Fibonacci (ogni numero è la somma dei due precedenti).

*/

# variable decalaration
$a = 0;
$b = 1;


while ($a < 10) {
    $a++;
    echo $a + $b + $a, PHP_EOL, "<br>"; # added PHP_EOL, "<br>" for to start a new line 
} 