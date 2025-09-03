<?php

/*

Esercizio 3:

- Crea una variabile $mia_eta con il tuo anno di nascita. 
- Crea un'altra variabile $anno_corrente con l'anno attuale (es. 2024). 
- Calcola la tua età e stampala. 
- Poi, crea una variabile $eta_legale e assegnala a 18. 
- Controlla se la tua età è maggiore o uguale a quella legale (>=) e stampa il risultato.

*/

$myAge = 2002;
$currentYear = 2025;
$legalAge = 18;

$currentAge = $currentYear - $myAge; # calcolo la mia età 
$ages = $currentAge >= $legalAge; # l'età corrente è maggiore o uguale a età legale??

echo "La mia età: " . $currentAge . " anni", PHP_EOL; # stampo a schermo l'età corrente

echo "E' $currentAge maggiore di $legalAge? " . $ages; # 23, true = 1 currentAge è maggiore di legalAge



