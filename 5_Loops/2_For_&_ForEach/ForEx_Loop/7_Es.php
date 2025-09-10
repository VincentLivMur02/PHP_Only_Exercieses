<?php

/*

Esercizio 7:

- Stampa una piramide di asterischi alta 5 righe.
*
**
***
****
*****

*/

$asterisks = "*";
for ($i = 0; $i < 5; $i++) {
    echo $asterisks . "<br>";
    $asterisks .= "*"; // Concatenates another asterisk to the end of the string
}

/*

for ($row = 1; $row <= 5; $row++) {
    for ($column = 1; $column <= $row; $column++) {
        echo "*";
    }
    echo "<br>";
}

*/