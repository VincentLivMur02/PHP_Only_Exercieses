<?php

/*

Esercizio 8-9-10:

- Crea una classe Studente con proprietà nome e voti (un array). 
- Il costruttore accetta il nome, ma l'array dei voti deve essere inizialmente vuoto.

- Aggiungi alla classe Studente un metodo aggiungiVoto() che accetta un numero e lo aggiunge all'array dei voti.

- Aggiungi alla classe Studente un metodo calcolaMedia() che calcoli e restituisca la media dei voti usando la funzione array_sum() e count().

*/

class Student {

    public $name;
    public $votes;

    public function __construct($name, $votes = []) {
        $this->name = $name;
        $this->votes = $votes;
    }

    public function addVote() {
        foreach($votes as $vote) {
            echo $vote++;
        }
    }

    public function calcMedia(){
        echo "Sum of the votes: " . array_sum($votes);
    }

}

$newStudent = new Student("Pino", 32);
$newStudent->addVote();
$newStudent->calcMedia();