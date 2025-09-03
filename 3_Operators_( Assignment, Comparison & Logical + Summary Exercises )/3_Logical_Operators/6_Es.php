<?php 

/*

Esercizio 6:

- Crea tre variabili: $username = "guest", $password = "guest123", e $is_admin = false. 
- Controlla se l'utente non è un admin (!$is_admin) E se lo username è "guest" E la password è "guest123". 
- Stampa il risultato.

*/

$username = "guest";
$password = "guest123";
$is_admin = false;


$checkDetails = !$is_admin && $username === "guest" && $password === "guest123"; # controllo se l'utente non è un admin, che lo username sia uguale a "guest" e che la password sia "$guest123"

echo $checkDetails; # 1 ( true ), tutti i dati sono veri 