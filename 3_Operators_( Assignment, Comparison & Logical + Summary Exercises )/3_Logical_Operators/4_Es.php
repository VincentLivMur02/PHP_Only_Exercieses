<?php 

/*

Esercizio 4:

- Crea una variabile $voto con valore 17. 
- Controlla se il voto è maggiore o uguale a 18 OPPURE se è uguale a 30 (perché il voto massimo è 30). 
- Stampa il risultato.

*/

$vote = 17;

# controlla se il voto è maggiore o uguale a 18 OPPURE se è uguale a 30
$checkVote = $vote >= 18 OR $vote == 30;

echo $checkVote; # niente risultato, false, 17 non è maggiore di 18 e non è uguale a 30
