<?php

/*

Esercizio 7:

- Crea una funzione isMaggiorenne() che accetti un parametro (l'età) e restituisca true se l'età è maggiore o uguale a 18, altrimenti false.

*/

function isAnAdult($age) {
    if ($age >= 18) {
        echo "You'r an Adult!";
    } else {
        echo "You'r a Minor :)";
    }
}

isAnAdult(3);