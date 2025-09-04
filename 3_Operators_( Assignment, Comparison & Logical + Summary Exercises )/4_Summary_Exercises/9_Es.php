<?php

/*

Esercizio 9:

- Crea due variabili: $voto e $presenze. 
- Un alunno è promosso se il suo voto è maggiore o uguale a 18 e le sue presenze sono maggiori o uguali al 75%. 
- Controlla la condizione e stampa un messaggio appropriato.

*/

$vote = 100;
$presences = 48;

# student promosion check 
if ( $vote >= 18 && $presences >= ( 50 * 75 ) / 100 ) {
    echo "The student has promoted!";
} else {
    echo "The student hasn't promoted!";
}

// dubbi sui calcoli delle presenze ... 



