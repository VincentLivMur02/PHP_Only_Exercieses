<?php

/*

Esercizio 1:

- Crea una classe Animale con una proprietà protected $specie. 
- Aggiungi un metodo pubblico salvaSpecie() che imposta il valore della proprietà.

-------------

Esercizio 2:

- Crea una classe Cane che extends Animale. 
- Aggiungi un metodo public getNomeSpecie() che restituisca la proprietà $specie ereditata.

---------------

Esercizio 3:

- Nella classe Animale, crea un metodo protected presentati(). 
- Nella classe Cane, crea un metodo public mostraInfo() che chiami il metodo presentati() ereditato.
*/

class Animal {
    #property
    protected $species;


    # construct
    public function __construct($species){
        $this->species = $species;
    }

    # method 
    public function saveSpecies() {
        return $this->species;
    }

    protected function introducedYourself() {
        echo "Please, save the " . $this->species . " species from humans!";
    }
    
}

class Dog extends Animal {
    # method 
    public function getNameSpecies() {
        return parent::saveSpecies();
    }

    public function displayInfo() {
        return parent::introducedYourself();
    }
}

$newDog = new Dog("Labrador");
echo $newDog->getNameSpecies();
echo $newDog->displayInfo();