<?php

/*

Esercizio 3:

- Aggiungi alla classe Contatore una proprietà static numIstanze inizializzata a 0. 
- Nel costruttore, incrementa numIstanze di 1. 
- Aggiungi un metodo public static stampaIstanze() che stampi il valore di numIstanze.

*/

class Count {

    private $count = 0;
    static $numIstances = 0;

    public function __construct($count, $numIstances) {
        $this->count = $count;
        $this->numIstances = $numIstances++;
    }

    public function increment() {
        for($count = 0; $count > 1; $count++){
            echo $count;
        };
    }

    public function getCount() {
        echo "This is the count: ". $this->count;
    }

    public static function printIstances() {
        echo $numIstances;
    }
}

$newCount = new Count(2999);

# private prop
echo $newCount->getCount();
# static prop
Count::printIstances();

