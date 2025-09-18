<?php

/*

Esercizio 8:

- Rivedi la classe Contatore. 
- Rendi la proprietà $valore protected.

-----------

Esercizio 9:

- Crea una classe ContatoreDecremento che extends Contatore. 
- Aggiungi un metodo public decrementa() che riduca il valore del contatore.

*/

class Counter {
    protected $value = 0;

    public function increment() {
        $this->value++;
    }

    public function getValue() {
        return $this->value;
    }
}

class decrCount extends Counter {
    public function decr(){
        return $this->value--;
    }
}

$newCounter = new decrCount();
$newCounter->decr();
$newCounter->decr();
$newCounter->decr();
$newCounter->decr();
$newCounter->decr();
echo $newCounter->getValue();
