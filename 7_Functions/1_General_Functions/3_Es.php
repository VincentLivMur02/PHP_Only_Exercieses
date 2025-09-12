<?php

/*

Esercizio 3:

- Crea una funzione calcola() che accetti tre parametri: due numeri e un'operazione (+, -, *, /). 
- La funzione deve eseguire l'operazione richiesta e restituire il risultato.

*/

function calculate($num1, $num2, $operation) {
    $result = 0;
    if ($operation === "+") {
        $result = $num1 + $num2;
    } elseif ($operation === "-") {
        $result = $num1 - $num2;
    } elseif ($operation === "*") {
        $result = $num1 * $num2;
    } elseif ($operation === "/") {
        $result = $num1 / $num2;
    }
    return $result;
}

echo calculate(15, 5, "/"); // Output: 3