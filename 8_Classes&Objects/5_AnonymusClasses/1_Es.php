<?php

/*

Esercizio 1:

- Crea una variabile $saluto che contenga un'istanza di una classe anonima. 
- Questa classe deve avere un metodo saluta() che stampa "Ciao da una classe anonima!". 
- Chiama il metodo per verificare che funzioni.

----------

Esercizio 2:

- Crea una seconda variabile $messaggio che contenga un'istanza di una classe anonima. 
- Passa un argomento al costruttore (es. "professore"). 
- La classe anonima deve avere un costruttore che salva l'argomento in una proprietà private e un metodo stampaMessaggio() che utilizzi quella proprietà

*/

# anonymus class = $variable = new class { execute code ... } 
$sayHello = new class { # ( ES1 )
    #method
    public function hello() {
        echo "Hello, I'm Class... Anonymus Class.<br>";
    }
};

$message = new class("Professor") {  # ( ES2 )
    # property
    private $name;

    #construct
    public function __construct($name) {
        $this->name = $name;
    }

    # method 
    public function printMessage() {
        echo "Hello " . $this->name . "!<br>";
    }
};

$sayHello->hello();
$message->printMessage();