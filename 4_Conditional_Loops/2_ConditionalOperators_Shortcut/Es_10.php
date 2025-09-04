<?php

/*

Esercizio 10:

- Un negozio online ha un prezzo base di 150 euro. 
- Se un utente è un membro VIP, ha un prezzo speciale di 100 euro. 
- Crea una variabile $is_vip (true/false) e, usando l'operatore ternario, calcola e stampa il prezzo che deve pagare l'utente.

*/

$is_vip = true;
$basePrice = 150;
$specialPrice = 100;

$userPrice = ($is_vip === true) ? $specialPrice : $basePrice;

echo "The price for the user is : " . $userPrice . "€";




