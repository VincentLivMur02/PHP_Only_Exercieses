<?php

/*

Esercizio 10:

- Hai un array di voti. 
- Verifica se un voto specifico (es. 4) è presente. 
- Se lo è, sostituiscilo con un valore corretto (es. 6). 
- Stampa l'array prima e dopo la modifica per mostrare il cambiamento.

*/
$votes = [1, 5, 6, 7, 32, 0, 4]; // I added 4 for demonstration purposes
echo "Array before modification: ";
print_r($votes);

$key = array_search(4, $votes); // Find the key for the value 4
if ($key !== false) { // If the key exists
    $votes[$key] = 6; // Replace the value with 6
}
echo "<br>Array after modification: ";
print_r($votes);