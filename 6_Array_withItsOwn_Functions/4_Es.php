<?php

/*

Esercizio 4:

- Crea due array di frutta, ad esempio $frutta1 e $frutta2. 
- Uniscili in un nuovo array e stampa la lista completa.

*/

$fruit1 = ["Apple", "Banana", "Kiwi"];
$fruit2 = ["Orange", "Ananas", "Strawberrys"];

# union of the arrays
$union = array_merge($fruit1, $fruit2); 
var_dump($union); # var_dump for more informations about a variable ( in this case , $union )