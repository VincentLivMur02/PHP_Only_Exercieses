<?php

/*

Esercizio 3:

- Simula l'inserimento di un voto da parte di un utente. 
- Il voto deve essere tra 1 e 10. Usando un ciclo do...while, continua a chiedere un voto finché non viene inserito un numero valido.

*/

$insertTheVote = 4;

do {
    if ($insertTheVote > 1 && $insertTheVote < 10){
        echo "This number is valid: " . $insertTheVote;
    } else {
        echo "Repeat the procedure.";
    }
    $insertTheVote++;
} while ($insertTheVote);