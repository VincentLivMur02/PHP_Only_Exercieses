<?php

/*

Esercizio 10:

- In PHP esiste un valore speciale null. 
- Crea una variabile $variabile_nulla senza assegnarle un valore (così conterrà null). 
- Controlla se $variabile_nulla è uguale a null usando sia == che ===. 
- Stampa entrambi i risultati e nota la differenza.

*/

$nullVar; # variabile senza valore = null

$resultOne = $nullVar == null;
$resultTwo = $nullVar === null;

echo $resultOne, PHP_EOL; # Output: 1 (true), perché il valore è uguale a null.
echo $resultTwo; # Output: 1 (true), perché il valore e il tipo sono entrambi null.

