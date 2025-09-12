<?php

/*

Esercizio 5:

- Crea una funzione contoAllaRovescia() che accetti un numero. 
- La funzione deve stampare a schermo un conto alla rovescia da quel numero fino a 1.

*/

function countDown($num = 10){
    for ($num = 10; $num >= 1; $num-- ) {
        echo $num. "<br>";
    }
}

countDown();

// dubbi...