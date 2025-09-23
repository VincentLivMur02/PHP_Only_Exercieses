<?php

/*

Esercizio 3 - Preparazione per la Copia Profonda:

- Crea una classe Specifiche con una proprietà public $codice inizializzata a "XYZ".

- Modifica la classe Prodotto aggiungendo una proprietà public $specifiche che sia un'istanza della classe Specifiche.

- Crea un'istanza di Prodotto chiamata $prodottoOriginale.

- Crea una copia di $prodottoOriginale senza usare __clone(): $prodottoCopia = clone $prodottoOriginale.

- Modifica il codice delle specifiche tramite $prodottoCopia->specifiche->codice = "ABC".

- Stampa il codice delle specifiche di $prodottoOriginale e $prodottoCopia e spiega perché sono uguali.

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
Il codice del prodotto originale e quello del prodotto clonato sono uguali ("ABC").
Questo accade perché la clonazione superficiale ha copiato solo il riferimento
all'oggetto "Specifics", non una nuova istanza di "Specifics".
Di conseguenza, sia $originalProduct che $copyProduct puntano allo stesso
oggetto "Specifics" in memoria.
*/
