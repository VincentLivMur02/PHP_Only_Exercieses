<?php

/*

Esercizio 3:

- Crea una funzione calcolaTutto() che accetta un array di numeri e una callback. 
- La callback deve eseguire un'operazione su ogni elemento dell'array (es. raddoppiarlo o metterlo al quadrato) e restituire il nuovo array.

*/

$operations = function($num) {
    return $num * $num; 
};

function calculate($arr, $callbackFn){
    $newArr = [];
    foreach ($arr as $num) {
        $newArr[] = $callbackFn($num);
    }  
    return $newArr;
}

$result = calculate([1,2,3,4,5], $operations);
print_r($result);