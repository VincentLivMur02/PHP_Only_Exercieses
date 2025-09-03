<?php

/*

Esercizio 7:

- Un cliente ha diritto a uno sconto se ha una tessera fedeltà O se spende più di 100 euro. 
- Crea due variabili $ha_tessera (true/false) e $spesa_totale (un numero). 
- Imposta i valori in modo che il cliente abbia diritto allo sconto. 
- Controlla la condizione e stampa il risultato.

*/

$haveBadge = true;
$total = 100;

# ciclo if, ho la logica per gestire lo sconto dei clienti
if ($haveBadge === true || $total > 100) { 
    echo "The client is entitled to a discount "; # possono averlo, solo se hanno una carta fedeltà o speso + di 100 ( vale se non hanno una di queste cose )
} else {
    echo "Isn't entitled to a discount"; # se non hanno nessuna delle due, false non hanno diritto
} 


