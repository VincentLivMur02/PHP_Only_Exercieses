<?php

/*

Esercizio 2:

- Crea un array di numeri. 
- Ordinalo in ordine crescente e stampa l'array risultante. 
- Poi, inverti l'ordine e stampa nuovamente l'array.

*/

$numbers = [23, 89, 0, 34];
sort($numbers); # ascending order
var_dump($numbers);

rsort($numbers); # reverse order
var_dump($numbers);



// perchè le funzioni di sorting non funzionano quando vengono assegnate ad una variabile? + differenza tra var-dump, print_r e echo 




