<?php

/*

Esercizio 2:

- Crea una variabile $numero con valore 10 (integer) e una variabile $stringa con valore "10" (stringa). 
- Confrontale usando == e ===. 
- Stampa entrambi i risultati e spiega la differenza nei commenti.

*/

$number = 10;

$crazyNumber = "10";

echo $number == $crazyNumber; # true , il valore è uguale
echo $number === $crazyNumber; # false retituisce nulla, il valore è uguale, ma il tipo è diverso
