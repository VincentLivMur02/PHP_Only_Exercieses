<?php

/*

Esercizio 2: 

- Immagina di dover calcolare il prezzo finale di un prodotto. 
- Crea una variabile $prezzo_base (un numero float, es. 25.50) e una variabile $sconto (un numero intero, es. 10). 
- Calcola lo sconto in euro e poi il prezzo finale.
- Stampa il prezzo finale con una frase che sia chiara.

*/

$base_price = 10.50; # prezzo base
$discount = 5; # sconto

$finalDiscountPrice = $base_price + $discount; # calcolo la somma dei prezzi 
$finalPrice = $finalDiscountPrice / $discount; # divido la somma dei prezzi precedente con il prezzo scontato che mi da il prezzo finale

echo "Lo sconto è: " . $finaleDiscountPrice . "€"; # sconto finale
echo "Il prezzo finale del prodotto è di: ". $finalPrice . "€"; # prezzo finale

// Dubbi... 
