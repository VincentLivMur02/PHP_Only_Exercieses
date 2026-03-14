<?php

/*

Recap:

- Array numerici - Array con indici numerici = indice parte da 0
- Array associativi = ["Peter" => 21, "Laura" => 12]
- Array multimensionali = ["Russo" => ("Luigi", "Marco", "Angela")]

Dichiarazione di array :
[ ] = più veloce e leggibile 
array() = utile ma anche molto codice sprecato

Esercizio 1: 

- Crea un array a indice numerico con almeno 5 prodotti della spesa. 
- Stampa il numero totale di prodotti. 
- Poi, verifica se "pane" è presente nella lista e stampa un messaggio appropriato.

*/

$prodArr = ["Phone", "Apple", "Banana", "Pot", "Teapot"]; # shorthand array initialisation

echo "We have " . count($prodArr) . " products in this array <br>"; # count the products

$message = (in_array("Bread", $prodArr)) ? # if else inline 
"Bread exist in this array" : 
"Bread doesn't exist in this array";

echo $message; 

