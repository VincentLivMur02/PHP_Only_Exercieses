<?php

/*

Esercizio 10:

- Crea una funzione lanciaDado() che non accetta parametri e restituisca un numero casuale tra 1 e 6. ( calcolo della probabilità )

*/

function diceThrower() { # no params
    $result = rand(1, 6);
    echo "You rolled a " . $result;
    return $result; // The function returns the result
}

diceThrower();
