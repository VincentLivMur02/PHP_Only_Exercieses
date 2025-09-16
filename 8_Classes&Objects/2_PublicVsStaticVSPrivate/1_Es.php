<?php

/*

Esercizio 1:

- Crea una classe Contatore con una proprietà private $conto inizializzata a 0 nel costruttore. 
- Aggiungi un metodo public incrementa() che aumenti il conto di 1. 
- Stampa il conto usando un metodo pubblico getConto().

*/

class Counter {
    private $counter = 0;

    public function __construct() {
        // We do not pass parameters, the counter starts from 0
    }

    public function increment() {
        $this->counter++;
    }

    public function getCounter() {
        return $this->counter;
    }
}

$myCounter = new Counter();
$myCounter->increment();
$myCounter->increment();
echo $myCounter->getCounter(); // Output: 2