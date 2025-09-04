<?php

/*

Esercizio 1:

- Un prodotto costa 50 euro. 
- Applica uno sconto del 15% e poi aggiungi l'IVA del 22% al prezzo scontato. 
- Stampa il prezzo finale. 
- Usa gli operatori di assegnazione per il calcolo.

*/

$priceProduct = 50; # prezzo del prodotto
$saleProduct = 15; # sconto del 15%
$IVATax = 22; # IVA del 22%

$discountPriceProduct = ($priceProduct * $saleProduct) / 100; # calcolo dello sconto del 15% sul prodotto di 50 = 7.5
$prodDiff = $priceProduct - $discountPriceProduct; # verifica della differenza del prodotto: 42.5 + 7.5 = 50
$productWithIVATax = $prodDiff * ($IVATax / 100); # aggiunta l'IVA al prezzo già scontato
$finalPrice = $prodDiff + $productWithIVATax;

echo "The discount of ". $saleProduct . "% of " . $priceProduct . "€ is = " . $discountPriceProduct . "€", "</br>";
echo "The difference is = " . $prodDiff ."€ . Infact $prodDiff + $discountPriceProduct is = $priceProduct</br>";
echo "When we added the IVA tax, the result is = " . $productWithIVATax, "</br>";
echo "The final price is : ". $finalPrice . "€";




