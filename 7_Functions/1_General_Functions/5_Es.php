<?php

/*

Esercizio 5:

- Crea una funzione contoAllaRovescia() che accetti un numero. 
- La funzione deve stampare a schermo un conto alla rovescia da quel numero fino a 1.

*/

function countDown($num) {
    for ($i = $num; $i >= 1; $i-- ) {
        echo $i. "<br>";
    }
}

countDown(10);

