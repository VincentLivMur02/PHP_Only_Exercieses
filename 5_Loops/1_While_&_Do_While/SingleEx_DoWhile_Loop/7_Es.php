<?php

/*

Esercizio 7:

- Hai un carrello con un valore di 50 euro. 
- Continua a rimuovere articoli da 10 euro finché il valore del carrello non è 0. 
- Usando un ciclo do...while, stampa il valore del carrello dopo ogni rimozione.

*/

$cart = 50;

do {
    $result = $cart -= 10; 
    $cart--;
    echo $result;
} while ( $cart < 4 );

// dubbi