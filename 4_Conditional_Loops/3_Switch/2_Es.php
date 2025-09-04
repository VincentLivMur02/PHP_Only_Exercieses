<?php

/*

Esercizio 2:

- Crea una variabile $voto (un numero intero da 1 a 5).

- Se il voto è 5, stampa "Eccellente".

- Se è 4, stampa "Buono".

- Se è 3, stampa "Sufficiente".

- Se è 2, stampa "Insufficiente".

- Se è 1, stampa "Gravemente insufficiente".

- In ogni altro caso, stampa "Voto non valido.".

*/

$vote = 1;

switch ( $vote ) {
    case ($vote === 5):
        echo "Exellent";
        break;
    case ($vote === 4);
        echo "Good";
        break;
    case ($vote === 3);
        echo "Sufficient";
        break;
    case ($vote === 2);
        echo "Insufficient";
        break;
    case ($vote === 1);
        echo "Seriously insufficent";
        break;
    default:
        echo "Invalid vote";
        break;
}




