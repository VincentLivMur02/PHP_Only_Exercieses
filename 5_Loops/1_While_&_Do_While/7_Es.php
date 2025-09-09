<?php

/*

Esercizio 7:

- Stampa tutti i numeri pari da 1 a 20. 
- Usa un ciclo while e un'istruzione if per controllare se il numero è pari (even).

*/

$numbers = 0;

while ($numbers < 20) {
    if ($numbers % 2 === 0) { # need the modulo symble % to verify if the number is even or odd
        echo "$numbers are even"; 
    } else {
        echo "$numbers are odd";
    }
    $numbers++; # increment of 1, if we doesn't insert.. the code explode in a infinite loop
}

// perchè non visualizzo il n.20?
