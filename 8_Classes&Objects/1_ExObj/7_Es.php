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

    // The constructor only accepts the name and initialises the votes array as empty.
    public function __construct($name) {
        $this->name = $name;
        $this->votes = []; // Empty array
    }

    // Method to add a vote. Accepts one parameter.
    public function addVote($vote) {
        // Adds the vote to our votes array.
        $this->votes[] = $vote;
    }

    // Method to calculate the average.
    public function calcAverage() {
        // We check that there are votes to avoid division by zero.
        if (count($this->votes) > 0) {
            // Calculate the sum and divide it by the number of votes.
            $totalVotes = array_sum($this->votes);
            $numberOfVotes = count($this->votes);
            return $totalVotes / $numberOfVotes;
        } else {
            return 0; // If there are no votes, the average is 0.
        }
    }
}

// Let's create a new student object.
$newStudent = new Student("Pino");

// Let's add the votes using the method we created.
$newStudent->addVote(8);
$newStudent->addVote(7);
$newStudent->addVote(9);

// Let's call the method to calculate the average and print the result.
echo "The average of the votes for " . $newStudent->name . " is: " . $newStudent->calcAverage();

?>
