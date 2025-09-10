<?php   


/*

Esercizio 8:

- Stampa le prime 8 potenze di 2 (2^1, 2^2, 2^3, ... 2^8)

*/


for ($i = 1; $i <= 8; $i++) {
    $power = 2 ** $i;
    echo "2 raised to the power of " . $i . " is equal to: " . $power . "<br>";
}
