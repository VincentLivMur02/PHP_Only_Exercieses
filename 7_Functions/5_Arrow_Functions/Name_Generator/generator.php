<?php

/*

📝Trasformatore di Nomi (Arrow Function)
- Vediamo se ricordi come si scrive una Arrow Function senza avere lo schema davanti.

- Obiettivo: Trasformare una stringa in tutto MAIUSCOLO.

- Requisiti:

    - Crea una Arrow Function che accetta una stringa.

    - La funzione deve restituire la stringa trasformata in maiuscolo (usa strtoupper).

    - Usa questa funzione dentro un ciclo foreach per trasformare un array di nomi: ["luca", "marco", "anna"].

    - Stampa ogni nome trasformato.

*/

# sbagliato
/*
$nomi = ["LAura", "gervaSO", "soFIa", "vincenzo", "LoRenzO", "GiovannA"];

$nome = strtoupper($nomi);

echo $nome;
*/


# corretto
$nomi = ["luca", "marco", "anna"];
// 1. Crea l'attrezzo (Arrow Function)
$trasforma = fn($nome) => strtoupper($nome);
// 2. Usa il ciclo per applicarlo
foreach ($nomi as $singoloNome) {
    echo $trasforma($singoloNome) . "<br>";
}




