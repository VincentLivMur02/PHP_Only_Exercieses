<?php

/*

Esercizio 3:

- Crea una funzione filtraPari() che accetta un array di numeri.
- La funzione deve restituire un nuovo array che contiene solo i numeri pari dell'array originale

*/

function oddFilter($arr) {
    foreach ($arr as $numbers => $num){
        if ($num % 2 == 0) {
            print_r($num);
        }
    }  
}

oddFilter([1,2,3,4,5,6,7,8,9,10]);

