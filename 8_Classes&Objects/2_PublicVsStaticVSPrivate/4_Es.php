<?php

/*

Esercizio 4:

- Aggiungi alla classe Rettangolo dell'esercizio precedente una proprietà private colore. 
- Aggiungi un costruttore e un metodo public setColore() per impostare il valore e un metodo getColore() per recuperarlo.

Esercizio 5: 

- Aggiungi alla classe Rettangolo un metodo public static descrivi() che stampi "Questa è una classe per creare oggetti Rettangolo."

*/

class Rectangle  {
    public $base;
    public $height;
    private $colour;

    public function __constructor($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function setColour($colour) {
        $this->colour = $colour;
    }

    public function getColour() {
        return $this->colour;
    }

public static function describe() {
    echo "This is a class for creating Rectangle objects.";
}
}

$newRect = new Rectangle(10, 30);
$newRect->setColour("blue");
echo "The colour of the rectangle is: " . $newRect->getColour(); // Output: The colour of the rectangle is: blue
echo "<br>";
Rectangle::describe(); // Output: This is a class for creating Rectangle objects.