<?php

/*

Esercizio 14:

Hai l'array es ["penna" => 10, "matita" => 10, "quaderno" => 20, "gomma" => 5].

Stampa solo i nomi dei prodotti che costano esattamente 10.

*/

$prodcuts = [
    "Book Harry Potter" => 25.00, 
    "Book Food Recipts" => 10.00, 
    "Book Horror Story" => 10,
    "Book Love Story" => 9.99,
    "Book Adventure Story" => 10
];
echo "Original Array: <br>";
print_r($prodcuts);

#same ex 8, scans the array, accessing each key ($name) and each value ($price)
foreach($prodcuts as $prodcut => $price) {
    // Checks if the price is equal to 10
    if($price === 10) {
        // If the condition is true, prints the product name
        echo "<br> - " . $prodcut . " (price: " . $price . "$)<br>";
    }
}