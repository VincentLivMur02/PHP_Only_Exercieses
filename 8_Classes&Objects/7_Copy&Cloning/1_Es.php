<?php

/*

Esercizio 1 - Assegnazione per Riferimento:

- Crea una classe Prodotto con una proprietà public $prezzo inizializzata a 100.

- Crea un'istanza di Prodotto chiamata $prodottoOriginale.

- Assegna l'oggetto a una nuova variabile: $prodottoRiferimento = $prodottoOriginale.

- Modifica il prezzo tramite $prodottoRiferimento->prezzo = 200.

- Stampa il prezzo di $prodottoOriginale e spiega il risultato.

*/

class Product {
    # property
    public $price = 100;

}

$originalProduct = new Product();

$referProduct = $originalProduct;
$referProduct->price = 200;

echo $originalProduct->price;

/*
Spiegazione:

L'esercizio ci dimostra che, inizializzando una nuova classe ( class Product ) e assegnando una variabile di riferimento '$referProduct = $originalProduct;' ( creando prima la sua istanza $originalProduct = new Product();), è possibile lavorare con le proprietà di quella originale '$referProduct->price = 200;'. Non è una copia, ma una "sovrascrittura" di quest'ultima 'echo $originalProduct->price;'. 

*/