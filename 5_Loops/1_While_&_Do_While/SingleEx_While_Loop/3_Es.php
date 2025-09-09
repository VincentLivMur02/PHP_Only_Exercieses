<?php

/*

Esercizio 3:

- Simula la richiesta di una password. 
- La password deve contenere almeno 8 caratteri. 
- Usando un ciclo while, continua a chiedere la password (simulando l'input con una stringa a tua scelta) finché non soddisfa il requisito.

*/

$password = "hello"; // Let's simulate the password
$min_length = 8;
while (strlen($password) < $min_length) {
    echo "The password is too short, it must have at least " . $min_length . " characters. Current: " . strlen($password) ."<br>";
    // Here we would simulate a new input
    $password = "long_password";
}
echo "Valid password. Length: " . strlen($password);