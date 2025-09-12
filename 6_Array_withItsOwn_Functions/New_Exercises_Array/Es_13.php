<?php

/*

Esercizio 13:

- Hai un array di prodotti e prezzi es: ["pane" => 2, "latte" => 1.5, "uova" => 3, "formaggio" => 5].

- Calcola la somma totale della spesa.

*/

$cart = [
    "Barilla pasta" => 2,
    "Zymil milk" => 3.50,
    "Don Gino's pizza" => 10.60,
    "Greek yoghurt" => 2.80,
    "Parmigiano cheese" => 40
];

$total_price = 0; // External counter

foreach ($cart as $price) {
    $total_price += $price; // Add each price to the total
}
echo "The total cost is: " . $total_price . "€.";                  