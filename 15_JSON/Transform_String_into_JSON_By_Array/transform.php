<?php

/*

📝 La sfida finale del "Trasformatore"
- Voglio vedere se riesci a fare tutto il percorso: Stringa -> Array -> Modifica -> JSON.

- Requisiti:

    - Hai una stringa di prodotti separati da virgola: "Pane,Latte,Uova".

    - Trasformala in un array.

    - Aggiungi un nuovo prodotto all'array: "Farina".

    - Trasforma l'array finale in una stringa JSON.

    - Stampa il JSON finale.

*/

$products = "Bread,Milk,Egg,Cake,Pizza";

$new_prod = explode(" , " , $products); # da stringa a array

print_r($new_prod); # array

array_push($new_prod, "Flour"); # aggiungi "Farina"

echo "<br>";

var_dump(json_encode($new_prod , true)); # trasforma in JSON
