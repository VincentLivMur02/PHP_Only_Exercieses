<?php

/*

Esercizio 2 - Copia Superficiale (Shallow Copy):

- Usa la stessa classe Prodotto dell'esercizio precedente.

- Crea un'istanza di Prodotto chiamata $prodottoOriginale.

- Crea una copia con la parola chiave clone: $prodottoCopia = clone $prodottoOriginale.

- Modifica il prezzo tramite $prodottoCopia->prezzo = 200.

- Stampa il prezzo di $prodottoOriginale e $prodottoCopia e spiega la differenza nei risultati.

*/

class Product {
    # property
    public $price = 100;

}

$originalProduct = new Product();
$copyProduct = clone $originalProduct;
$copyProduct->price = 200;

echo $originalProduct->price;
echo $copyProduct->price;

/*

Spiegazione:

Nell'esercizio, oltre ad aver riutilizzato la stessa classe dell'esercizio precedente ( class Product ), abbiamo utilizzato la keyword clone. 

Essa ci serve per fare una copia parziale e creare una nuova istanza dell'oggetto '$originalProduct = new Product();' su cui abbiamo fatto la copia '$copyProduct = clone $originalProduct;' ( nel nostro caso class Product ). 

Il risultato ci mostra che comuqne la nostra classe originale non è stata lconata del tutto ma solo parzialmente

*/

