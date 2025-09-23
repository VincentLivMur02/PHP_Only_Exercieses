<?php

/*

Esercizio 5 - get_object_vars():

- Modifica la classe Utente con proprietà public $nome, protected $eta, e private $password.

- Crea un'istanza di Utente.

- Stampa il risultato di get_object_vars() e spiega perché alcune proprietà non vengono mostrate.

----------------

Esercizio 6 - Combinazione di funzioni:

- Crea una funzione debugOggetto($obj) che usi is_object() per verificare se l'input è un oggetto.

- Se lo è, la funzione deve stampare il nome della classe e una lista di tutti i suoi metodi pubblici usando get_class_methods().


*/

class User2 {
    public $name = "Mario";
    protected $age = 30;
    private $password = "secret";
}

$user2 = new User2();
echo "<h3>Properties visible from outside (get_object_vars):</h3>";
print_r(get_object_vars($user2));

/*
Spiegazione: 
Vengono mostrate solo le proprietà pubbliche ('nome') perché la funzione è chiamata dall'esterno della classe.
*/

# es 6
function debugObject($obj) {
    if (is_object($obj)) {
        echo "Class name: " . get_class($obj) . "<br>";
        echo "Public methods: ";
        print_r(get_class_methods($obj));
    } else {
        echo "It is not an object.<br>";
    }
}
debugObject(new User2());