<?php

/*

Esercizio 7:

- Crea una funzione ordinaVoti() che accetta un array associativo di studenti e voti. 
- La funzione deve ordinare l'array in ordine decrescente basandosi sui voti e restituire l'array ordinato.

*/

function orderVotes($students = ["Peter" => 23, "Maxuel" => 26, "Barbara" => 30]) {
    rsort($students); # indexies are unchanged
    print_r($students);
}

orderVotes();