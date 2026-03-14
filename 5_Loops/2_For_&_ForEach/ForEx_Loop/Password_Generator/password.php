<?php

/*

📝 Il Generatore di Password 
- Immagina di voler creare una "password" casuale composta da 8 numeri.

- Requisiti:

    - Crea una variabile $password inizialmente vuota (stringa vuota "").

    - Usa un ciclo for che giri 8 volte.

    - Ad ogni giro, genera un numero casuale tra 0 e 9 usando rand(0, 9).

    - Concatena il numero alla variabile $password (usa l'operatore .=).

    - Fuori dal ciclo, stampa: "La tua password temporanea è: $password".

*/

// sbagliato

/*
# var con stringa vuota
$password = "";

for($giri = 0; $giri >= 8; $giri++) {
    # numero casuale a ogni giro
    $giri += rand(0,9);

    # concatenazione della var $password
    $giri .= $password;
}

echo "La tua password temporanea è: $password";
*/

# correzzione
$password = ""; // La stringa che cresce

for ($i = 0; $i < 8; $i++) { // Conta da 0 a 7 (8 giri)
    $numeroCasuale = rand(0, 9); 
    $password .= $numeroCasuale; // Concatena il numero alla stringa
}

echo "La tua password è: $password";
