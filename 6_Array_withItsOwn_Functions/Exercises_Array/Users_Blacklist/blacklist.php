<?php

/*

La "Blacklist" degli utenti

    - Hai un array di email: [" admin@test.com", "user@test.com ", "GUEST@test.com", "admin@test.com"].

    - Passaggio 1 (array_map): Pulisci le email togliendo gli spazi (trim) e trasformandole tutte in minuscolo (strtolower).

    - Passaggio 2 (array_filter): Dall'array pulito, elimina l'email "admin@test.com".

    - Stampa il risultato finale.

*/

$emails = [" admin@test.com", "user@test.com ", "GUEST@test.com", "admin@test.com"];

print_r($emails);
echo "<br>";

# array_map ( prima funzione e poi array )
$clean_Emails = array_map(fn($email) => strtolower((trim($email))), $emails);

print_r($clean_Emails);
echo "<br>";

/* sbagliato
# array_filter ( prima array e poi funzione )
$delete_Email = array_filter($emails, array_unique($emails));

print_r($delete_Email);
*/

# corretto
// Usa l'operatore di diversità !==
$filter_Emails = array_filter($clean_Emails, fn($email) => $email !== "admin@test.com");
print_r($filter_Emails);


