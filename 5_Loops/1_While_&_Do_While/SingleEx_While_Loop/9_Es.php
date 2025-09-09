<?php

/*

Esercizio 9:

- Hai un array di numeri. 
- Cerca un numero specifico al suo interno. 
- Usando un ciclo while, scorri l'array finché non trovi il numero o finché non raggiungi la fine. 
- Stampa un messaggio che indichi se hai trovato il numero o meno.

*/

$numbers = [1, 3, 5, 7, 8, 34];

while ($numbers) {
    if(in_array(34, $numbers)) {
        echo "Got the number";
    }
    echo $numbers;
}

// dubbi