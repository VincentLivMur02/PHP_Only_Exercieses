<?php

/*

Esercizio 1:

- Crea una variabile $password e assegna il valore "qwerty". 
- Se la password è "qwerty", stampa "Accesso consentito", altrimenti "Accesso negato".

*/

$password = "qwerty";


# creation of the if else loop 
if ($password === "qwerty") { # $password type and value must be equal
    echo "Access confirmd";
} else {
    echo "Access denied";
}