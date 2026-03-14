<?php

/*

📝 Traccia: Il Controllo Aggiornamenti
- In PHP, le stringhe che rappresentano numeri vengono confrontate correttamente dallo spaceship operator. Vogliamo capire se la versione installata di un programma è obsoleta, attuale o una versione beta/futura.

- Obiettivo: Confrontare la versioneInstallata con la versioneStabile.

- Requisiti:

    - Definisci $versioneInstallata = "2.5".

    - Definisci $versioneStabile = "3.0".

    - Usa lo spaceship operator per confrontare le due stringhe.

- Questa volta, invece di usare lo switch, prova a usare una struttura if / elseif / else per stampare:

    - Se -1: "Aggiornamento disponibile! Passa alla $versioneStabile."

    - Se 0: "Il software è aggiornato."

    - Se 1: "Stai usando una versione sperimentale (Beta)."


*/


$versioneInstallata = "2.5";
$versioneStabile = "3.0";

$verioneDefinitiva = $versioneInstallata <=> $versioneStabile;

if ($versioneDefinitiva = -1) {
    echo "Aggiornamento disponibile! Passa alla <b>$versioneStabile</b>.";
} elseif ($versioneDefinitiva = 0) {
    echo "Il software è aggiornato.";
} else {
    echo "Stai usando una versione sperimentale (Beta).";
}