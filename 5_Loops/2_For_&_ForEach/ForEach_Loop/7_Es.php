<?php


/*

Esercizio 7:

- Hai un array di numeri: [80, 150, 95, 210, 60]. 
- Stampa solo i numeri che sono maggiori di 100.

*/

$arrNum = [80, 150, 95, 210, 60];

foreach ($arrNum as $numbers) {
    if ($numbers > 100 ) { # if $numbers are grater than 100, stamp numbers
        echo $numbers . "<br>";
    }
}