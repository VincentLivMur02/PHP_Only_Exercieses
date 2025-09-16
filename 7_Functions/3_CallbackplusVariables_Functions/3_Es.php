<?php

/*

Esercizio 3:

- Crea una funzione calcolaTutto() che accetta un array di numeri e una callback. 
- La callback deve eseguire un'operazione su ogni elemento dell'array (es. raddoppiarlo o metterlo al quadrato) e restituire il nuovo array.

*/

$operations = function($doubleOrSquare) {

    $newArr = [];

    foreach ($arr as $num) {
        $double = $num * $num;
        $newArr[] = $double;
    } 

    return $newArr;
};

function calculate(){
    $callbackFn($doubleOrSquare);
}

calculate([1,2,3,4,5]);