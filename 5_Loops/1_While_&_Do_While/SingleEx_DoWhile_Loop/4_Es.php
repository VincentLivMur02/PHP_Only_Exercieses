<?php

/*

Esercizio 4:

- Simula un menu con tre opzioni (1. Pizza, 2. Pasta, 3. Insalata). 
- Chiedi all'utente di scegliere un'opzione. 
- Usando un ciclo do...while, continua a chiedere la scelta finché non viene inserita un'opzione valida (1, 2 o 3).

*/

$menuChoice = 0; // Simulate the user's choice
do {
    // Here we simulate the user's choice
    $menuChoice = rand(1, 5); // Generate a random number between 1 and 5 to simulate the error
    echo "You have chosen option " . $menuChoice . ". <br>";
} while ($menuChoice < 1 || $menuChoice > 3);

echo "Valid choice: " . $menuChoice . ".";


