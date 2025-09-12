<?php


/*

Esercizio 18:

- Crea un array associativo con i nomi di studenti e i loro voti.

- Ordina l'array per voti, dal più alto al più basso, mantenendo l'associazione tra nomi e voti.

*/

$class = [
    "Jhon" => 7,
    "Miles" => 2,
    "Jinny" => 10,
    "Marta" => 6,
    "Zorba" => 1
];

asort($class);
print_r($class);

