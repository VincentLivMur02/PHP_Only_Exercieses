<?php

/*

Esercizio 2:

- Crea una variabile $username e assegnale un valore. 
- Poi, usa isset() e empty() per verificare se la variabile esiste e se ha un valore.
- Stampa un messaggio per ogni condizione.

*/

$username = "Lorenzo";

$varExist = function() use($username) {
    if (isset($username) && empty($username)) {
        echo "The var 'username' exist and has a value!";
    } else {
        echo "The var 'username' doesn't exist and hasn't a value!";
    }
    return $varExist;
};



