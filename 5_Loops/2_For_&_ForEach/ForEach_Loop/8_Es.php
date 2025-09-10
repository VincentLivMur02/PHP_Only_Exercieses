<?php

/*

Esercizio 8:

- Hai un array di prodotti: ["latte", "pane", "uova", "cioccolato"]. 
- Stampa ogni prodotto in una lista, aggiungendo un messaggio come "Disponibile: [nome prodotto]".

*/

$arrProd = ["Milk", "Bread", "Eggs", "Chocolate"];

foreach ($arrProd as $product) {
    echo "Available : " . $product . "<br>";
}