<?php 

/*

Esercizio 5:

- Genera un numero casuale tra 1 e 100. 
- Usando un ciclo do...while, continua a generare un numero finché non esce un valore maggiore di 90. 
- Stampa quanti tentativi ci sono voluti.

*/

$num = 43;

do {
    $num = $num > 1 && $num < 100;
    $num++;
    echo $num;
} while ($num < 4);


// dubbi