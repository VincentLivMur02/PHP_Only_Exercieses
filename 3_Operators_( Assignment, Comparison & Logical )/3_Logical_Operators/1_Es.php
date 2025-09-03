<?php

/*

Esercizio 1:

- Crea due variabili, $username con valore "admin" e $password con valore "12345". 
- Controlla se l'utente ha inserito lo username corretto E la password corretta. 
- Stampa il risultato.

*/

# variabili
$username = "admin";
$password = "12345";

$check = $username === "admin" && $password === "12345"; 

echo "The user has wrote the dates correctly? " . $check; # 1 ( true )  