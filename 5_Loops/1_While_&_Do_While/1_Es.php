<?php

/*

Esercizio 1:

- Crea una variabile $i con valore 0. 
- Usando un ciclo while, stampa i numeri da 0 a 5.

while (condizione_è_vera) {
    // codice da eseguire
} 

*/

$i = 0;

while ($i < 5) { # we need to increment the number until the number 5
    echo $i;
    $i++; # incrment the num. If this doesn't exists, the loop would result infinite, and the code'll come to crush
}

