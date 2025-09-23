<?php

/*

Esercizio 1 - is_object(:

- Crea una variabile $data che sia un oggetto.

- Crea una variabile $stringa che sia una stringa.

- Usa is_object() per verificare il tipo di entrambe e stampa il risultato (es. "variabile è un oggetto" o "variabile non è un oggetto").

*/

$data = new stdClass();
$string = "Hello";

if (is_object($data)) {
    echo "The variable 'data' is an Object: " . $data . "<br>";
} else {
    echo "The variable 'data' isn't an Object: " . $data . "<br>";
}

if (is_object($string)) {
    echo "The variable 'string' is a string: " . $string . "<br>";
} else {
    echo "The variable 'string' isn't a string: " . $string . "<br>";
}

var_dump($data);
var_dump($string);