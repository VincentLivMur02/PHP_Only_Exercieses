<?php

/*

Esercizio 1:

- Crea una classe Contatore con una proprietà private $conto inizializzata a 0 nel costruttore. 
- Aggiungi un metodo public incrementa() che aumenti il conto di 1. 
- Stampa il conto usando un metodo pubblico getConto().

*/

class Count {

    private $count = 0;

    public function __construct($count) {
        $this->count = $count;
    }

    public function increment() {
        for($count = 0; $count > 1; $count++){
            echo $count;
        };
    }

    public function getCount() {
        echo "This is the count: ". $this->count;
    }
}

$newCount = new Count(2999);

# private prop
echo $newCount->getCount();