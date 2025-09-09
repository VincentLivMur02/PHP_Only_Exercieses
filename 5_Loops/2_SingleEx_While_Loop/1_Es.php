<?php

/*

Esercizio 1:

- Crea una variabile $i con valore 0. 
- Usando un ciclo while, stampa i numeri da 0 a 10, uno per riga.

*/

$i = 0;

while ($i < 10) {
    $i++; # i need it to prevent infinite loops
    echo $i;
}