<?php

/*

Esercizio 12:

- Crea un array con 5 nomi in ordine casuale.

- Mescola l'array usando shuffle() e stampa la nuova lista.

- Ordina l'array in ordine decrescente usando rsort() e stampa il risultato finale.

*/

$namesArr = ["Jack", "Billy", "Miles", "Martina", "Aurora"];
echo "Original array : <br> ";
print_r($namesArr);

echo "Casual order : <br> ";
shuffle($namesArr); # by reference = we don't need declare a variable 
print_r($namesArr);

echo "Descendant order : <br> ";
rsort($namesArr); # by reference = we don't need declare a variable 
print_r($namesArr);
