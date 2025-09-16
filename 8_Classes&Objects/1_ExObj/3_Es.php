<?php

/*

Esercizio 3:

- Aggiungi alla classe Cane un metodo presentati() che stampi un messaggio come "Ciao, mi chiamo [nome] e sono un [razza]". 
- Chiama questo metodo sul tuo oggetto.

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

    # add a method
    public function introduced() {
         echo "Bau Bau! My name is " . $this->name . " and I'm a " . $this->race . "<br>";
    }
}

# new object
$newDog = new Dog("Fido", "Labrador");
# calling a method in the object
$newDog->introduced();

print_r($newDog);