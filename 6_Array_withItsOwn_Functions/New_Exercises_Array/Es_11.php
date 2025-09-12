<?php

/*

Esercizio 11:

- Crea un array di numeri a tua scelta e ordinalo in modo crescente usando sort(). 
- Stampa il risultato.

- Crea un array di nomi di animali e ordinalo in ordine alfabetico (crescente) usando sort(). 
- Stampa il risultato.

*/

$numArr = [234, 90000, 849, 8, 9695, 0, 24, 0.3, -54];

sort($numArr); 
echo "Ascendant array of Numbers: <br>";
print_r($numArr);

$animalArr = ["Cat", "Elephant", "Lion", "Dog", "Duck", "Seagull", "Bunny"];

sort($animalArr);
echo "Ascendant array of Animals: <br>";
print_r($animalArr);