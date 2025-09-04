<?php

/*

Esercizio 2:

- Crea due variabili, $username e $password, e assegna loro i valori "user1" e "pass123". 
- Poi, crea altre due variabili, $input_username e $input_password, e assegna loro gli stessi valori. 
- Controlla se l'utente ha inserito le credenziali corrette e stampa a schermo se l'accesso è riuscito o meno.

*/

# prime variabili 
$username = "user1";
$password = "password123";
# altre due variabili 
$input_username = "user1";
$input_password = "password123";

# verifica delle credenziali corrette
if ($username === $input_username && $password === $input_password ) {
    echo "Access permitted";
} else {
    echo "Access denied";
}

# non ho inserito || perchè ho voluto che TUTTE le credenziali debbano essere inserite correttamente, non volevo che l'utente inserisca O una O l'altra 

