<?php

/*

Esercizio 9:

- In PHP, esiste una funzione chiamata is_int() che controlla se una variabile è un numero intero. 
- Fai una prova creando una variabile $numero con valore 10 e poi controlla se è un integer usando questa funzione. 
- Prova poi a cambiare il valore a 10.5 e vedi cosa succede.

*/

// $intNum = 456;
$intNum = 10.5;

echo "This num $intNum is integer ? " . is_int($intNum);

# quando è intero la risposta affermativa ritorna 1 quindi true
# quando è float la risposta negativa non ritorna nulla quindi false