<?php

/*

Esercizio 4 - Copia Profonda (Deep Copy) con __clone():

- Rilavora l'esercizio precedente. Aggiungi il metodo magico __clone() alla classe Prodotto.

- All'interno di __clone(), clona l'oggetto specifiche.

- Ripeti il test dell'esercizio precedente. Spiega perché questa volta i codici delle specifiche sono diversi.

*/

class Specifics {
    public $code = "XYZ";
}

class Product {
    public $specifics;

    public function __construct() {
        // The Product class contains an instance of the Specifics class.
        $this->specifics = new Specifics();
    }

    public function __clone(){
        $this->specifics = clone $this->specifics;
    }
}

// 1. Create the original object
$originalProduct = new Product();
echo "Original code: " . $originalProduct->specifics->code . "<br>"; // Output: XYZ

// 2. Create a superficial copy
$copyProduct = clone $originalProduct;
echo "Code of the copy before modification: " . $copyProduct->specifics->code . "<br>"; 

// 3. Modify only the nested object in the copy
$copyProduct->specifics->code = "ABC";

echo "<hr>"; 

// 4. Print the codes for both objects
echo "Original code after modifying the copy: " . $originalProduct->specifics->code . "<br>";
echo "Copy code after modification: " . $copyProduct->specifics->code . "<br>";

/*
Spiegazione del Risultato:
Il codice del prodotto originale e quello del prodotto clonato sono diversi ( "XYZ" "ABC" ).
Questo accade perché la clonazione profonda ha copiato tutto l'oggetto "Specifics".
Di conseguenza, sia $originalProduct che $copyProduct puntano a due diversi oggetti "Specifics" e "Porduct" in memoria.
*/
