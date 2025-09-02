<?php

/*

Esercizio 10:

- Crea una variabile $prezzo_lordo e una $tasso_iva (es. 22%). 
- Calcola l'importo dell'IVA da aggiungere al prezzo lordo e stampa il risultato.

*/

# calcolo iva = prezzo lordo * tasso IVA / 100
$grossPrice = 250;
$IVATax = 22;

$totalIVA = $grossPrice * $IVATax / 100;

echo $totalIVA;