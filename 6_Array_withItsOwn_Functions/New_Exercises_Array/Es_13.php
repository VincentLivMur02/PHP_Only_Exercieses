<?php

/*

Esercizio 13:

- Hai un array di prodotti e prezzi es: ["pane" => 2, "latte" => 1.5, "uova" => 3, "formaggio" => 5].

- Calcola la somma totale della spesa.

*/

$cart = [
    "Pasta Barilla" => 2, 
    "Milk Zymil" => 3.50, 
    "Pizza Don Gino's" => 10.60,
    "Yougurt Greco" => 2.80,
    "Cheese Parmigiano" => 40 
];

foreach($cart as $product => $price) {
    if (rsort($price) === $price) {
        var_dump($price);
    }
}