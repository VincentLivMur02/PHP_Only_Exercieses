<?php

/*

Esercizio 2:

- Hai un array di prezzi: [15.50, 23.00, 4.25, 10.75]. 
- Calcola la somma totale di tutti i prezzi usando un ciclo foreach e stampa il risultato finale.

*/

$prices = [15.50, 23.00, 4.25, 10.75];
$total_sum = 0; # External variable for the sum

foreach ($prices as $price){
    $total_sum += $price; # Add the current price to the sum
}
echo "The total sum is: " . $total_sum . "€."; # Print only once