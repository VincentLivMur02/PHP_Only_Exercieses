<?php

/*

Esercizio 4:

- Rivedi la classe Rettangolo degli esercizi precedenti. 
- Rendi le proprietà $base e $altezza protected.

-----------

Esercizio 5: 

- Crea una classe Quadrato che extends Rettangolo. 
- Il costruttore accetta solo un parametro ($lato) e lo usa per impostare sia $base che $altezza.

-----------

Esercizio 6:

- Aggiungi alla classe Rettangolo un metodo protected calcolaArea() che restituisca l'area.

*/


class Rectangle {
    # properties
    protected $base;
    protected $height;

    public function __construct($base, $height){
        $this->base = $base;
        $this->height = $height;
    }

    protected function calculateArea() {
        echo "The area of the rectangle is: " . $this->base * $this->height . "cm";
    }
}

class Square extends Rectangle {
    public function __construct($side) {
        parent::__construct($side,$side);
    }

    public function getArea() {
        return parent::calculateArea();
    }
} 

$newSquare = new Square(5);
echo $newSquare->getArea();