<?php

/*

Esercizio 10:

- Crea una variabile $numero con valore 15. 
- Controlla se il numero è maggiore di 10 E minore di 20. 
- Stampa il risultato.

*/

$number = 15;

$result = $number > 10 && $number < 20; # controllo per vedere se il numero nella variabile $number rispetta le caratteristiche della variabile $result

echo "The number $number is grater than 10 and less than 20? " . $result; # 1 ( true )