<?php

/*

Esercizio 2 - get_class():

- Crea una classe Utente con un metodo vuoto.

- Crea un'istanza di Utente.

- Stampa il nome della classe utilizzando get_class().

*/

class User {
    public function getName() {}
}

$user = new User();
echo get_class($user);