<?php

/*

Esercizio 4:

- Crea due variabili, $username e $password con valori predefiniti. 
- Chiedi a un utente di inserire un $input_username e un $input_password. 
- Controlla se le credenziali sono corrette e, in caso contrario, se il numero di tentativi supera 3, blocca l'account.

*/

$username = "Pippo il pasticcione";
$password = "1234_Ac@0012";
$input_username = "feewwegwegw"; # it's a test
$input_password = "weggsggege"; # it's a test 
$userAttempts = 3;


if ( $input_username === $username && $input_password === $password && $userAttempts <= 3) {
    echo "Credentials are correct. You can access!";
} else {
    echo "You can't access!";
}