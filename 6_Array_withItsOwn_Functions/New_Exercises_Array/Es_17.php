<?php

/*

Esercizio 17:

- Crea un array con 10 numeri.

- Crea un nuovo array estraendo i primi 4 numeri da quello originale.

- Stampa il nuovo array.

*/

$num = [4, 90, 49, 0, 53, 1];

$slice = array_slice($num, 0, 4);

print_r($slice);