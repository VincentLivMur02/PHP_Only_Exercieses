<?php

/*

Esercizio 4:

- Crea una funzione calcolaMedia() che accetti un numero variabile di voti e calcoli la loro media.
- Usa le funzioni func_num_args() e func_get_args().

*/

function calculateAverage() {
    $votes = func_get_args(); // Array with all votes
    $numberOfVotes = func_num_args(); // Total number of votes
    $sum = 0;

    foreach ($votes as $vote) {
        $sum += $vote; // Add each vote
    }

    if ($numberOfVotes > 0) {
        $average = $sum / $numberOfVotes;
        echo "The average of the votes is: " . $average;
    } else {
        echo "No votes entered.";
    }
}

calculateAverage(8, 7, 9, 6); // Output: The average of the votes is: 7.5



