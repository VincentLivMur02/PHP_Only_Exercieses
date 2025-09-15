<?php

/*

Esercizio 1:

- Crea una funzione sommaArray() che accetta un array di numeri come parametro e restituisce la somma totale di tutti i suoi elementi.

*/

function sumArray($arr = [1,2,6,7]) {
    echo array_sum($arr); # function for calculate all the values in an array
}

sumArray();