<?php

/*

Esercizio 3: 

- Crea una classe Animale con una proprietà public nome e un metodo public emettiVerso() che stampi "Suono generico".

Esercizio 4:

- Crea una classe Cane che extends Animale. 
- Aggiungi una proprietà public razza. 
- Nel costruttore, assegna sia il nome che la razza.

Esercizio 5: 

- Aggiungi alla classe Cane un metodo presentati() che stampi un messaggio come "Ciao, mi chiamo [nome] e sono un cane di razza [razza]."


Esercizio 6: 

- Nella classe Cane, sovrascrivi il metodo emettiVerso() per stampare "Bau bau!". 
- Chiama questo metodo su un oggetto Cane.

*/

class Animal {
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function doTowards() {
        echo "Generic Sound...<br>";
    }
}

# child class extends the parent one
class Dog extends Animal {
    public $race;

    public function __construct($name, $race) {
        parent::__construct($name); # call the parent construct function
        $this->race = $race;
    }

    public function introduceYourself() { 
        echo "<br>Hello, my name is " . $this->name . " and I'm " . $this->race . "<br>";
    }

    public function doTowards(){ # override the method of parent class
        echo "Bau Bau Bau!";
    }
}

$newObj = new Dog("Gino", "Jack Russel");
$newObj->doTowards();

