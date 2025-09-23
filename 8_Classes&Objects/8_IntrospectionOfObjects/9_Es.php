<?php

/*

Esercizio 9 - get_class_vars():

- Usa la classe Utente con le sue proprietà.

- Stampa un array delle proprietà della classe Utente usando get_class_vars().

*/

class User {
    public $name;
    protected $eta;
    private $password;
}

$user4 = new User();
print_r(get_class_vars($user4));

