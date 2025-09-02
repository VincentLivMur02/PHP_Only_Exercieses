<?php

/*

Esercizio 10:

- In PHP esiste un valore speciale null. 
- Crea una variabile $variabile_nulla senza assegnarle un valore (così conterrà null). 
- Controlla se $variabile_nulla è uguale a null usando sia == che ===. 
- Stampa entrambi i risultati e nota la differenza.

*/

$nullVar = "Hello";

$resultOne = $nullVar == null;
$resultTwo = $nullVar === null;

echo $resultOne, PHP_EOL;
echo $resultTwo;

// Dubbi... 