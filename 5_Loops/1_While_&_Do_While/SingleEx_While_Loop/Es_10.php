<?php

/*

Esercizio 10:

- Conta quante volte la lettera "a" appare in una stringa. 
- Usando un ciclo while, scorri la stringa e conta le occorrenze. 
- Stampa il totale alla fine.

*/

$string = "Banana";

while ($string < 3) {
    $string++;
    echo substr_count($string, "a");
}

// dubbi...
