<?php

/*

Esercizio 1:

- Crea una classe Contatore con una proprietà private $valore inizializzata a 0. 
- Aggiungi i metodi incrementa() e getValore() per accedervi.

*/

class Counter {
    private $value = 0;

    public function increment() {
        $this->value++;
    }

    public function getValue() {
        return $this->value;
    }
}

$newCounter = new Counter();
$newCounter->increment();
$newCounter->increment();
$newCounter->increment();
$newCounter->increment();
$newCounter->increment();
echo $newCounter->getValue();
