<?php

/*

Esrcizio 9:

- Hai un array di voti: [5, 7, 8, 4, 9, 6]. 
- Stampa solo i voti che sono maggiori o uguali a 6.

*/

$votesArr = [5, 7, 8, 4, 9, 6];
$sortArr = sort($votesArr); # sort function is used to sort an array in ascendin order

foreach ($votesArr as $votes) {
    if ($votes >= 6) {
        echo $votes . "<br>"; 
    }
}

# first the array stamp the values in random order 
# when i add sort() function, the values are in order