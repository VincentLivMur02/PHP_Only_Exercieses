<?php

/*

Esercizio 5:

- Hai un array di nomi di animali: ["gatto", "cane", "leone", "tigre"]. 
- Stampa un messaggio come "L'animale è: [nome animale]" per ogni elemento.

*/

$animalsArr = ["cat", "dog", "lion", "tiger"];

foreach ($animalsArr as $animal) {
    echo "This animal is a: " . $animal . "<br>";
}