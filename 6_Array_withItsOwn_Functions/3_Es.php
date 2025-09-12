<?php

/*

Esercizio 3:

- Crea un array associativo dove le chiavi sono i nomi degli studenti e i valori sono i loro voti. 
- Ordina l'array per voti in ordine decrescente, mantenendo l'associazione tra nome e voto.

*/

$students = [
    "Giovanni" => 5, 
    "Miles" => 6, 
    "Andrea" => 10
];

# array in descending order only for values ( votes )
rsort($students);
var_dump($students);

