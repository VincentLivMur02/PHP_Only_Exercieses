<?php

/*

Esercizio 9:

- Crea due variabili: $voto e $presenze. 
- Un alunno è promosso se il suo voto è maggiore o uguale a 18 e le sue presenze sono maggiori o uguali al 75%. 
- Controlla la condizione e stampa un messaggio appropriato.

*/

$vote = 34;
$presences = 5;
$minimumPresencies = ceil( ( 50 * 75 ) / 100 ) ; // arrotondare il risultato

# student promossion check 
if ( $vote >= 18 && $presences >= $minimumPresencies ) {
    echo "The student has promoted!";
} else {
    echo "The student hasn't promoted!";
}




