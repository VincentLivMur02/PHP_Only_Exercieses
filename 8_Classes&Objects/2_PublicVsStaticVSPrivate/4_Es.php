<?php

/*

Esercizio 4:

- Aggiungi alla classe Rettangolo dell'esercizio precedente una proprietà private colore. 
- Aggiungi un costruttore e un metodo public setColore() per impostare il valore e un metodo getColore() per recuperarlo.

Esercizio 5: 

- Aggiungi alla classe Rettangolo un metodo public static descrivi() che stampi "Questa è una classe per creare oggetti Rettangolo."

*/

class Rectangle {
    # properties
    public $base;
    public $height;
    private $color;

    # methods
    public function __construct($base, $height, $color) {
        $this->base = $base;
        $this->height = $height;
        $this->color = $color;
    }

    public function calculateArea() {
        echo "The area of the rectangle is: " . $this->base * $this->height . "cm";
    }

    public function setColor() {
        $this->color = "Red";
    }

    public function getColor() {
        setColor();
    }

    public static function describe() {
        echo "This is a class to create an object rectangle!";
    }
}

$newRect = new Rectangle(10, 30, $color);
$newRect->calculateArea();
$newRect->setColor();
$newRect->getColor();
Rectangle::describe();