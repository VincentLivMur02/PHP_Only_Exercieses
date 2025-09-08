<?php

/*

Esercizio 1:

- Crea tre variabili: $numero1, $numero2 e $operazione (+, -, *, /). 
- Usa uno switch per eseguire l'operazione richiesta tra i due numeri e stampa il risultato. 
- Aggiungi un default per le operazioni non valide.

*/

$num1 = 3;
$num2 = 10;
$operation = "/"; # in this case i used a string for my symbol beacuse we'll create an error on my code

switch ($operation) {
    case "+":
        echo $operation = $num1 + $num2;
        break;
    case "-":
        echo $operation = $num1 - $num2;
        break;
    case "*":
        echo $operation = $num1 * $num2;
        break;
    case "/":
        echo $operation = $num1 / $num2;
        break;
    default:
        echo "This operation is invalid!";
        break;
}




