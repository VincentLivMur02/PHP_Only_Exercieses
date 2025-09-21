<?php

/*

Esercizio 10:

- Rivedi la classe Prodotto. 
- Rendi la proprietà $prezzo protected invece di private. 
- Aggiungi i metodi setPrezzo() e getPrezzo() come prima. 
- Assicurati che il tuo codice funzioni ancora correttamente con la classe ProdottoScontato che la estende, senza dover modificare la classe ProdottoScontato.

*/

class Product {
    public $name;
    protected $price;

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