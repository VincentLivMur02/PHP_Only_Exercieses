<?php

/*

📝 Il Filtro Prezzi (array_filter)
- Immagina un e-commerce dove l'utente vuole vedere solo i prodotti che costano meno di 50€.

- Requisiti:

    - Hai questo array di prezzi: $prezzi = [20, 70, 15, 100, 45, 10];.

    - Usa array_filter con una Arrow Function per tenere solo i prezzi minori di 50.

    - Salva il risultato in $prezzi_bassi.

    - Stampa l'array risultante con print_r.

*/

# sbagliato
/*
$prices = [20, 70, 15, 100, 45, 10];

print_r($prices);

echo "<br>";

$return = fn() => array_filter($prices < 50);

print_r($return);
*/

# corretto
$prezzi = [20, 70, 15, 100, 45, 10];

// Array per primo, poi la condizione
$prezzi_bassi = array_filter($prezzi, fn($prezzo) => $prezzo < 50);

print_r($prezzi_bassi);