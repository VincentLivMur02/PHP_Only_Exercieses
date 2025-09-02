<?php


/*

Esercizio 8:

- Crea una variabile $voto_esame con valore 25. 
- Controlla se il voto è maggiore di 24 (>) e se è minore o uguale a 30 (<=). 
- Stampa entrambi i risultati.

*/

$examGrade = 25;

$grater = $examGrade > 24; # controllo se è maggiore di 24 

$lessEqual = $examGrade <= 30; # controllo se è minore o uguale a 30

echo "$examGrade  is grater than 24? $grater", PHP_EOL; # true = 1, è più grande di 24 
echo "$examGrade  is less equal than 30? $lessEqual"; # true = 1, è più minore o uguale a 30