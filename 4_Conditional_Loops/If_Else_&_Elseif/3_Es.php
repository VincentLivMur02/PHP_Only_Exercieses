<?php 
/*

Esercizio 3:

- Crea una variabile $voto con un numero da 1 a 30.

- Se il voto è maggiore o uguale a 28, stampa "Ottimo lavoro!".

- Altrimenti, se il voto è maggiore o uguale a 18, stampa "Promosso!".

- Altrimenti, stampa "Bocciato!".
 
*/

$vote = 17;

if ( $vote >= 28 ) {
    echo "Good Job";
} else if ( $vote >= 18 ) {
    echo "Passed";
} else {
    echo "Failed";
}