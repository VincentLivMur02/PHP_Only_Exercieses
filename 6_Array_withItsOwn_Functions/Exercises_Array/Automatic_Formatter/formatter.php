<?php

/*

📝 Il Formattatore Automatico (array_map)
- Vogliamo prendere una lista di nomi e assicurarci che siano tutti pronti per il database (senza spazi vuoti ai lati e con la prima lettera maiuscola).

- Requisiti:

    - Hai questo array: $nomi_sporchi = ["  luca ", " MARCO", "anna  "];.

    - Usa array_map con una Arrow Function.

    - All'interno della funzione devi usare trim() (per togliere gli spazi) e ucfirst(strtolower()) (per avere solo la prima maiuscola).

    - Stampa l'array "pulito".

*/

#sbagliato
/*
$nomi_sporchi = ["  luca ", " MARCO", "anna  "];

fn() => trim($nomi_sporchi) && ucfirst($nomi_sporchi);

print_r($nomi_puliti);
*/

# corretto
$nomi_sporchi = ["  luca ", " MARCO", "anna  "];

// Funzione per prima, poi l'array
$nomi_puliti = array_map(fn($nome) => ucfirst(strtolower(trim($nome))), $nomi_sporchi);

print_r($nomi_puliti);