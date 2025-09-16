<?php

/*

Esercizio 2:

- Crea una variabile $username e assegnale un valore. 
- Poi, usa isset() e empty() per verificare se la variabile esiste e se ha un valore.
- Stampa un messaggio per ogni condizione.

*/

$username = "Lorenzo";

if (isset($username)) {
    if (empty($username)) {
        echo "The variable exists but is empty!";
    } else {
        echo "The variable exists and has a value";
    }
} else {
    echo "The variable does not exist";
}

