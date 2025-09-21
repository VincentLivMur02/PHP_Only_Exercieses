<?php

/*

Esercizio 2:

- Crea una classe Utente con proprietà public $nome e private $password. 
- Usa un costruttore per impostare entrambi i valori. 
- Aggiungi un metodo public getPassword() che restituisca un errore, per dimostrare che non si deve accedere direttamente alla password.

*/

class User {
    public $name;
    private $password;

    public function __construct($name, $password) {
        $this->name = $name;
        $this->password = $password;
    }

    public function getPassword(){
        echo "You can't access directly by the password!";
    }
}

$newUser = new User("Jonny", "urvvvavvba");
$newUser->getPassword();