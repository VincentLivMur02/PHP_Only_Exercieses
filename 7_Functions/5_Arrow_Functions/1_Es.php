<?php

/*

- Requisiti:

    - Usa la stessa variabile $costoSpedizione = 5;.

    - Crea una Arrow Function chiamata $totaleRapido.

    - Sintassi: $totaleRapido = fn($prezzo) => $prezzo + $costoSpedizione;.

    - Chiama la funzione con 50 e stampa il risultato.

*/

$costoSpedizione = 5;

$totaleRapido = fn($prezzo) => $prezzo + $costoSpedizione;

echo $totaleRapido(50); # 55
