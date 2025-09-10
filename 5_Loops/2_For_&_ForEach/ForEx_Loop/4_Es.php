<?php

/*

Esercizio 4:

Calcola la somma di tutti i numeri da 1 a 100.

*/

$sum = 0;

for ($i = 1; $i <= 100; $i++) {
    $sum += $i; 
}

echo "The sum of the numbers from 1 to 100 is : " . $sum;

