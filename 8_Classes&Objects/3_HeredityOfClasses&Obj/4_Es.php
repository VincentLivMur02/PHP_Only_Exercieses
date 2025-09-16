<?php

/*

# Esercizio 4: ( è il n. dell'esercizio )

Esercizio 7:

- Crea una classe Prodotto con proprietà public nome e private prezzo. 
- Aggiungi un costruttore e i metodi getPrezzo() e setPrezzo().

Esercizio 8: 

- Crea una classe ProdottoScontato che extends Prodotto. 
- Aggiungi una proprietà private sconto nel costruttore.

Esercizio 9:

- Nella classe ProdottoScontato, sovrascrivi il metodo getPrezzo() per restituire il prezzo originale meno lo sconto.

Esercizio 10: 

- Aggiungi alla classe Prodotto un metodo static calcolaMediaPrezzi() che accetta un array di oggetti Prodotto e calcoli la media dei loro prezzi, usando i metodi pubblici che hai creato.

*/

class Product {
    public $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }

    # Static method that accepts an array of objects
    public static function calcMediaPrices($products = []) {
        $totalPrice = 0;
        
        foreach ($products as $product) {
            $totalPrice += $product->getPrice();
        }
        
        $numberOfProducts = count($products);
        
        if ($numberOfProducts > 0) {
            return $totalPrice / $numberOfProducts;
        } else {
            return 0;
        }
    }
}

# child class extends parent one
class DiscountProd extends Product {
    private $discount;

    public function __construct($name, $price, $discount){ 
        parent::__construct($name, $price);
        $this->discount = $discount;
    }

    # override 
    public function getPrice() {
        return parent::getPrice() - $this->discount;
    }
}

# Creation of a ‘DiscountedProduct’ object
$samsung = new DiscountProd("Samsung S24", 1200, 200);

echo "The final price of " . $samsung->name . " is: " . $samsung->getPrice();


