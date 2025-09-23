<?php

/*

Esercizio 8 - Clone e Ereditarietà:



*/

class Animal {
    protected $type;

    public function getType() { 
        return $this->type; 
    }

    public function __construct() { 
        $this->type = "Generic"; 
    }
}

class Dog extends Animal {
    public function __construct() {
        parent::__construct();
        $this->type = "Dog";
    }
    public function __clone() {
        $this->type .= " Cloned";
    }
}

$originalDog = new Dog();
$copyDog = clone $originalDog;

echo "Original type: " . $originalDog->getType() . "<br>";
echo "Copy type: " . $copyDog->getType() . "<br>";

/*
Spiegazione: 
Il metodo __clone() della classe figlia modifica solo la sua istanza.
*/