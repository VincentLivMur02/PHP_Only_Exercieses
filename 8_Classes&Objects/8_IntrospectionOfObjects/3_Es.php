<?php

/*

Esercizio 3 - method_exists() (Uso di base):

- Aggiungi un metodo saluta() alla classe Utente.

- Crea un'istanza dell'oggetto.

- Usa un'istruzione if con method_exists() per verificare se il metodo saluta() esiste. Se esiste, chiamalo.

*/

class User {
    public function sayHell() {}
}

$user2 = new User();
if (method_exists($user2, "sayHello")) {
    echo "The method 'sayHello()' exist";
} else {
    echo "The method 'sayHello()' doesn't exist";
}