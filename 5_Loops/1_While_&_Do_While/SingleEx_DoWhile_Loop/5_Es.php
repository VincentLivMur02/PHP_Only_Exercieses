<?php 

/*

Esercizio 5:

- Genera un numero casuale tra 1 e 100. 
- Usando un ciclo do...while, continua a generare un numero finché non esce un valore maggiore di 90. 
- Stampa quanti tentativi ci sono voluti.

*/
$number = 0;
$attempts = 0;

do {
    $number = rand(1, 100); // Generate a random number
    $attempts++; // Increment the counter
    echo "Attempt " . $attempts . ": the number is " . $number . "<br>";
} while ($number <= 90);

echo "It took " . $attempts . " attempts to get a number greater than 90.";