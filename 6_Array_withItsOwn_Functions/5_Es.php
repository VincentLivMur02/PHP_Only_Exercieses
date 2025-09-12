<?php


/*

Esercizio 5:

- Crea un array di 10 numeri. 
- Estrai una porzione di 3 numeri a partire dal quinto elemento e stampa la porzione estratta.

*/

$num = [ 1, 4, 53, 907, 45, 43, 57, 10, 5, 102];

$portion = array_slice($num, 5, 3); # start from the 5 element and sort 3 numbers

var_dump($portion);