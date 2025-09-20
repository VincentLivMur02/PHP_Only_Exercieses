<?php

/*

Esercizio 1:

- Crea un'interfaccia chiamata FormaGeometrica che abbia due metodi: calcolaArea() e calcolaPerimetro().
- Entrambi i metodi non devono avere parametri.

-----------

Esercizio 2:

- Crea una classe Rettangolo che implements FormaGeometrica. 
- Implementa i metodi calcolaArea() e calcolaPerimetro() usando le proprietà $base e $altezza.

-------------

Esercizio 3:

- Crea una classe Cerchio che implements FormaGeometrica. 
- Aggiungi una proprietà $raggio. 
- Implementa i metodi calcolaArea() e calcolaPerimetro() usando il raggio.

-------------

Esercizio 4:

- Crea una funzione stampaDettagliForma() che accetti un parametro di tipo FormaGeometrica. 
- All'interno della funzione, stampa l'area e il perimetro della forma passata.

*/


# creation of an interface
interface GeometricForm {
    #methods 
    public function calcArea();
    public function calcPerimeter();
}

# class implements interface
class Rectangle implements GeometricForm {
    # properties
    public $base;
    public $height;

    # construct
    public function __construct($base,$height){
        $this->base = $base;
        $this->height = $base;
    }

    # methods
    public function calcArea(){
        echo "Area of the Rectangle: " . $this->base * $this->height . "<br>";
    }

    public function calcPerimeter() {
        echo "Perimeter of the Rectangle: " . ($this->base + $this->height) * 2 . "<br>";
    }
}


class Circle implements GeometricForm {
    # properties 
    public $ray;

    # construct 
    public function __construct($ray) {
        $this->ray = $ray;
    }

    # methods
    public function calcArea(){ # implements method of the interface, and override the method
        echo "Area of the Circle: " . M_PI * $this->ray . "<br>"; # with M_PI we can calculate the Pi ( pi greco )  
    }

    public function calcPerimeter() { # permieter is wrong... circumference is good
        echo "Circumference of the Circle: " . 2 * M_PI * $this->ray;
    }
}

# function
function printFormDetails($geometricForm) {
    echo $geometricForm->calcArea(), $geometricForm->calcPerimeter();
}

$newRectangle = new Rectangle(3, 8);
$newCircle = new Circle(5);

printFormDetails($newRectangle);
printFormDetails($newCircle);


