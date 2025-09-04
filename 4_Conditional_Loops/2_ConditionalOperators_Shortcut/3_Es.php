<?php

/*

Esercizio 3:

- Un cliente ha diritto a uno sconto del 10% se la sua spesa è maggiore di 50 euro. 
- Crea una variabile $spesa_totale e, usando l'operatore ternario, calcola il prezzo finale. 
- Se non ha diritto allo sconto, il prezzo finale rimane lo stesso

*/

$shopClient = 51;
$calcTheDiscount = ( $shopClient * 10 / 100 );
$totalOfDiscount = $shopClient - $calcTheDiscount; # difference of total shop client - the total of discount

$warningMessage = ( $shopClient >= 50 ) ? "Total of the shop is: $shopClient. The client has entitled to a discount of 10%: " . $calcTheDiscount . "€. Here the discount price: $totalOfDiscount": "Total of the shop is: $shopClient. The client hasn't entitled to a discount of 10%";

echo $warningMessage;



