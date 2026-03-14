<?php

/*

Esercizio 6:

- Crea un array di 5 colori a tua scelta. 
- Mescola i colori in modo casuale e stampa il risultato. 
- Poi, ordina l'array in ordine alfabetico e stampalo di nuovo.

*/

$colors = ["Brown", "Red", "Cyan", "Yellow", "Violet"];
shuffle($colors); # random order
echo "Random order : <br>";
var_dump($colors);

echo "Alphabetic order : <br>";
asort($colors); # alphabetic order
var_dump($colors);

