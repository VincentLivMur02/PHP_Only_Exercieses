<?php

/*

Esercizio 2:

- Crea una classe Matematica con due metodi static: somma() e moltiplica(), che accettano due numeri e restituiscono il risultato. 
- Non creare oggetti per usarli.

*/

class Math {
    public static function sum($num1, $num2) {
        return $num1 + $num2;
    }

    public static function mul($num1, $num2) {
        return $num1 * $num2;
    }
}

// To use the methods, you don't need to create an object.
// Use the class directly with the :: operator
echo "The sum is: " . Math::sum(10, 5); // Output: The sum is: 15
echo "<br>";
echo "The product is: " . Math::mul(10, 5); // Output: The product is: 50