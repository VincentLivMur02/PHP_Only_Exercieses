<?php

/*

Esercizio 2:

- Crea una classe Cane con le proprietà nome e razza. 
- Usa il metodo __construct() per assegnare questi valori quando crei un nuovo oggetto. Crea un oggetto e stampa i suoi valori.

*/

# creation of a class 
class Dog {
    public $name;
    public $race;

    # construct method which we'll use to assign different values in a new object
    public function __construct($name, $race) {
        $this->name = $name;
        $this->race = $race;
    }
}

# new object
$newDog = new Dog("Fido", "Labrador");

var_dump($newDog);
