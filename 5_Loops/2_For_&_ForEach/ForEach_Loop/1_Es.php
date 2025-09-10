<?php

/*

Recap:

- For each strumento più comodo per lavorare con gli array
- modo più pulito ed elegante per accedere a ogni valore di una collezione.

foreach ($array as $valore) {
    // codice da eseguire per ogni valore
}

Esercizio 1:

- Hai un array di frutta: ["mela", "banana", "ciliegia", "kiwi"].
- Usa un ciclo foreach per stampare ogni nome di frutta, uno per riga.
*/

# inizialitation of the array 
$newArr = ["apple", "banana", "cherry", "kiwi"]; 

foreach ( $newArr as $fruits ) {
    echo $fruits . "<br>";
}

# $newArr : array name 
# $fruits : value inside of the array
# echo $fruits . "<br>" : stamp all the values inside the array