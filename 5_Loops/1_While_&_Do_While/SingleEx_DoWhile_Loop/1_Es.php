<?php

/*

Esercizio 1:

- Scegli un numero segreto (es. 7). 
- Chiedi a un utente di indovinarlo (simulando l'input). 
- Usando un ciclo do...while, continua a chiedere finché non indovina il numero. 
- Stampa un messaggio "Hai indovinato!" alla fine.

*/

$secretNumber = 7;
$userInput = 0; // Let's simulate user input

do {
    // Here we would simulate the user entering a number
    // Let's simulate them guessing correctly on the third attempt
    if ($userInput < 7) {
        $userInput++;
    }
    echo "The user tried the number " . $userInput . ".<br>";
} while ($userInput !== $secretNumber);

echo "You guessed it! The secret number was " . $secretNumber . ".";