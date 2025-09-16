<?php

/*

Esercizio 3:

- Aggiungi alla classe Contatore una proprietà static numIstanze inizializzata a 0. 
- Nel costruttore, incrementa numIstanze di 1. 
- Aggiungi un metodo public static stampaIstanze() che stampi il valore di numIstanze.

*/

class Counter {
    private $account;
    public static $numInstances = 0; // Static declaration

    public function __construct() {
        $this->account = 0;
        self::$numInstances++; // Increment the static variable
    }

    public static function printInstances() {
    echo "Number of instances created: " . self::$numInstances;
    }
}

$c1 = new Counter();
$c2 = new Counter();
$c3 = new Counter();

Counter::printInstances(); // Output: Number of instances created: 3

