<?php

/*

Esercizio 9:
- Crea un array con almeno 4 elementi.
- Estrai le chiavi e i valori in due array separati e stampali.

*/

$arr = [
    "Ferrari" => "Hourse",
    "Lamborghini" => "Bull",
    "Alfa Romeo" => "Snake", 
    "Jaguar" => "Jaguar"
];

echo "Keys : <br>";
ksort($arr);
var_dump($arr);

echo "Values : <br>";
sort($arr);
var_dump($arr);