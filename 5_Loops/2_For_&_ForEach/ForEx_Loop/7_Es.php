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

$date = "*";

for ($i = 0; $i < 5; $i++){
    if ( $date === "*" ) {
        echo "<br>" . $date + $date;
    }
}