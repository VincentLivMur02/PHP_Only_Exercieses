<?php

/*

Esercizio 6 e 7:

- Crea una classe Rettangolo con proprietà base e altezza
- Aggiungi alla classe Rettangolo un metodo calcolaArea() che restituisca l'area del rettangolo.
- Crea un oggetto e stampa l'area.

*/

class Rectangle {
    # properties
    public $base;
    public $height;

    # methods
    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea() {
        echo "The area of the rectangle is: " . $this->base * $this->height . "cm";
    }
}

$newRect = new Rectangle(10, 30);
$newRect->calculateArea();


