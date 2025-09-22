<?php

/*

Esercizio 4:

- Crea una classe astratta Animale con una proprietà public $nome. 
- Aggiungi un metodo concreto mangia() e un metodo astratto faSuono().

-----------

Esercizio 5:

- Crea una classe Cane che estende Animale. 
- Implementa il metodo faSuono() e crea un costruttore che inizializzi il nome.

-----------

Esercizio 6:

- Crea una classe Gatto che estende Animale. 
- Implementa il metodo faSuono() e crea un costruttore che inizializzi il nome.

----------

Esercizio 7:

- Crea una funzione processaAnimale(Animale $animale) che accetti un oggetto di tipo Animale come parametro. 
- All'interno della funzione, fai chiamare i metodi mangia() e faSuono() dell'oggetto.

----------

Esercizio 8: (2)

- Crea un'istanza di Cane e Gatto.

- Chiama la funzione processaAnimale() passando sia l'oggetto Cane che l'oggetto Gatto.

- Spiega nei commenti il perché la funzione processaAnimale() può accettare entrambi gli oggetti.


*/

# es4
abstract class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    # concrete method
    public function eat(){
        echo "The animal is eating.<br>";
    }
    # abstract method
    abstract public function doSound();
}

# es5
class Dog extends Animal {

    public function __construct($name) {
        parent::__construct($name);
    }

    # implementation of abstract method
    public function doSound(){
        echo "The Dog " . $this->name . " make Bau Bau<br>";
    }
}

# es6
class Cat extends Animal {

    public function __construct($name) {
        parent::__construct($name);
    }

    # implementation of abstract method
    public function doSound(){
        echo "The Cat " . $this->name . " make Miaoo Miaoo<br>";
    }
}

# es7
function animalProcess(Animal $animal) {    
    $animal->eat();
    $animal->doSound();
}

$dog = new Dog("Mrs BauDog");
$cat = new Cat("Mss Mia");

animalProcess($dog);
animalProcess($cat);

echo "We can pass all the objects because, in function 'animalProcess' we have inizialized and implementaized the abstract methods of the abstract class 'Animal'.<br>";








