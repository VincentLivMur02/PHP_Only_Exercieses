<?php

/*

Esercizio 3:

- Simula la richiesta di una password. 
- La password deve contenere almeno 8 caratteri. 
- Usando un ciclo while, continua a chiedere la password (simulando l'input con una stringa a tua scelta) finché non soddisfa il requisito.

*/

$input = "ottootto";
$attempts = 0;

while ($attempts < 10) {
    echo $attempts;
    if ($input!= 8) {
        echo "The input $input has 8 characters: <b>$input</b>";
    }
    $attempts++;
}

// dubbi