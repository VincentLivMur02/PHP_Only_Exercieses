<?php

/*

Esercizio 8:

- Crea una variabile $utente_loggato (true/false) e una variabile $permessi_admin (true/false).

- Stampa "Benvenuto Amministratore" se $utente_loggato è true e $permessi_admin è true.

- Stampa "Benvenuto Utente" se $utente_loggato è true e $permessi_admin è false.

- Stampa "Accesso negato" se $utente_loggato è false.

- Usa if/elseif/else per questa logica.

*/

$userLogged = true;
$adminPermissions = false;

if ($userLogged === true && $adminPermissions === true) {
    echo "Welcome Administrator!";
} elseif ($userLogged === true && $adminPermissions === false) {
    echo "Welcome User!";
} elseif ($userLogged === false) {
    echo "Access denied!";
} else {
    echo "Log in.";
}