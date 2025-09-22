<?php

/*

Esercizio 1:

- Crea una classe astratta Forma con una proprietà protected $colore e un metodo concreto getColor(). 
- Aggiungi un metodo astratto calcolaArea().

-----------

Esercizio 2:

- Crea una classe Cerchio che estende Forma. 
- Aggiungi una proprietà private $raggio e un costruttore che inizializzi sia il raggio che il colore (chiamando il costruttore del genitore).
- Implementa il metodo calcolaArea().

-----------

Esercizio 3:

- Crea una classe Rettangolo che estende Forma. 
- Aggiungi proprietà private $larghezza e $altezza, e un costruttore che le inizializzi. - Implementa anche il metodo calcolaArea().

-----------

Esercizio 8: (1)

- Prova a creare un'istanza della classe Forma e osserva l'errore che ricevi.
- Crea un'istanza di Cerchio e Rettangolo, imposta il loro colore e calcola l'area.

*/

# es1
abstract class Form {
    protected $color;

    public function __construct($color) {
        $this->color = $color;
    }

    # concrete method
    public function getColor() { 
        echo "Here is the color of the following form: " . $this->color . "<br>";
    }

    # abstract method
    abstract public function calcArea(); 
}

# es2
class Circle extends Form {
    private $ray;

    public function __construct($color, $ray){
        parent::__construct($color);
        $this->ray = $ray;
    }

    # implementation of abstract method
    public function calcArea(){
        echo "Area of the Circle: " . M_PI * pow($this->ray, 2) . "<br>";
    }
}

# es3
class Rectangle extends Form {
    private $lenght;
    private $height;

    public function __construct($color, $lenght, $height) {
        parent::__construct($color);
        $this->lenght = $lenght;
        $this->height = $height;
    }

    # implementation of abstract method
    public function calcArea(){
        echo "Area of the Rectangle: " . $this->lenght * $this->height . "<br>";
    }
}

// $newForm = new Form(); we can't instantiate an abstract class

$newCircle = new Circle("<b>White</b>", 5);
$newRectangle = new Rectangle("<b>Brown</b>", 10, 8);

echo "<h3>-- Settings Circle --</h3>";
$newCircle->calcArea();
$newCircle->getColor();
echo "<br>";
echo "<h3>-- Settings Rectangle --</h3>";
$newRectangle->calcArea();
$newRectangle->getColor();


