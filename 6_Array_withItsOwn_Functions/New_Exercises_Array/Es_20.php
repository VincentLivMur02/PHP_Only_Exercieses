<?php

/*

Esercizio 20:

- Crea un array associativo con 3 elementi a tua scelta.

- Ottieni un array contenente solo le chiavi e un altro array contenente solo i valori.

- Stampa entrambi i nuovi array.

*/

$ages = [
    "Peter" => 21,
    "Gabbo" => 45,
    "Pino" => 2
];

echo "Keys : <br>";
ksort($ages);
var_dump($ages);

echo "Values : <br>";
sort($ages);
var_dump($ages);