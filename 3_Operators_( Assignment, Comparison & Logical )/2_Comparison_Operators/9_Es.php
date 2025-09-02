<?php

/*

Esercizio 9:

- Crea tre variabili: $valore1 = 10, $valore2 = 15, $valore3 = 20. 
- In una singola riga di codice, controlla se $valore1 è minore di $valore2 E $valore2 è minore di $valore3. 
- Stampa il risultato.

*/

# dichiarazione delle 3 variabili
$valueOne = 10;
$valueTwo = 15;
$valueThree = 20;

$result = $valueOne < $valueTwo && $valueTwo < $valueThree;

echo $result; # true = 1, vero in entrambi i casi 

