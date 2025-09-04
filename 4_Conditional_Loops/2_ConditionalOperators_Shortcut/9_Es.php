<?php

/*

Esercizio 9:

- Crea una variabile $quantita_prodotto con un numero. 
- Se la quantità è maggiore di 0, stampa "Disponibile", altrimenti "Esaurito". 
- Usa l'operatore ternario.

*/

$productQuantity = 0;

$messageQuantity = ( $productQuantity > 0 ) ? "The products are available" : "The product are sold out";

echo $messageQuantity;


