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
$productWithIVATax = ($discountPriceProduct * 100) / 122; # aggiunta l'IVA al prezzo già scontato = 7.5 * 100 / 122 = 6.1
$totalDiscountPrice = $prodDiff + $productWithIVATax; # ( prezzo iniziale ) + IVA = 42.5 + 6.1 = 48.6 

echo "The discount of ". $saleProduct . "% of " . $priceProduct . "€ is = " . $discountPriceProduct . "€", "</br>";
echo "The difference is = " . $prodDiff ."€ . Infact $prodDiff + $discountPriceProduct is = $priceProduct</br>";
echo "When we added the IVA tax, the result is = " . $productWithIVATax, "</br>";
echo "Finally the total is = " . $totalDiscountPrice . "€";

// Dubbi ... + come togliere il "periodico" nei numeri con la virgola

