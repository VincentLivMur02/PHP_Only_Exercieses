<?php

/*

Esercizio 5 - get_object_vars():

- Modifica la classe Utente con proprietà public $nome, protected $eta, e private $password.

- Crea un'istanza di Utente.

- Stampa il risultato di get_object_vars() e spiega perché alcune proprietà non vengono mostrate.

*/

class User {
    public $name;
    protected $eta;
    private $password;
}

$user3 = new User();
print_r(get_object_vars($user3));

/*
Spiegazione :
Con get_object_vars(), posso solo viuslizzare proptieà pubbliche, se la chiamassi all'interno di un metodo della classe, posso visualizzare anche le altre proprietà
*/