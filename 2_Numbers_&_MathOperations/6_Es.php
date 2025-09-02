<?php

/*

Esercizio 6: 

- Crea tre variabili con voti a tua scelta (es. 8, 7.5, 9). 
- Calcola la media e stampala a schermo. 
- Ricorda di usare i float se i voti hanno la virgola.

*/

# media = somma dei voti, numero dei voti ( totale ), media ( somma dei voti / numero voti )

# dichiarazione delle variabili
$firstNum = 5;
$secondNum = 6.9;
$thirdNum = 10;

# somma dei voti 
$sumVotes = $firstNum + $secondNum + $thirdNum;
# numero totale dei voti 
$totalVotes = 3;
# media dei voti
$averageVotes = $sumVotes / $totalVotes;

# stampare a schermo i messaggi
echo "La somma dei voti è: $sumVotes", PHP_EOL;
echo "I voti sono: $totalVotes", PHP_EOL;
echo "La media dei voti è: $averageVotes";