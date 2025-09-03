<?php

/*

Esercizio 7:

- Crea una variabile $a con valore 5 e una variabile $b con valore "5". 
- Controlla se le due variabili NON SONO identiche (!==) e stampa il risultato.

*/

$a = 5;
$b = "5";

$result = $a !== $b; # controllo se NON SONO identiche

echo $result; # true = 1, non sono identiche 
