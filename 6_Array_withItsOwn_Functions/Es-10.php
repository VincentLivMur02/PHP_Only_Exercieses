<?php

/*

Esercizio 10:

- Hai un array di voti. 
- Verifica se un voto specifico (es. 4) è presente. 
- Se lo è, sostituiscilo con un valore corretto (es. 6). 
- Stampa l'array prima e dopo la modifica per mostrare il cambiamento.

*/

$votes = [1, 5, 6, 7, 32, 0];

if (in_array(4, $votes)) {
    echo "Number 4 exist in this array";
} else {
    echo "Number 4 doesn't exist in this array";
}