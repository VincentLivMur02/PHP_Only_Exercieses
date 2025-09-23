<?php


/*

Esercizio 8 - get_class_methods():

- Usa la classe Utente degli esercizi precedenti.

- Stampa un elenco di tutti i metodi della classe Utente utilizzando get_class_methods().

*/

class User { 
    public function sayHello() {}
    public function sayGoodbye() {}
}

$classMethods = get_class_methods("User");
var_dump($classMethods);
