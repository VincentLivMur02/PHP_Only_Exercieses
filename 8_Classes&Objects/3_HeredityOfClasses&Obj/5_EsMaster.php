<?php

/*

Esercizio 1 - Classe Base "Persona":

- Crea una classe Persona con proprietà private $nome e $eta.

- Aggiungi un costruttore che accetti e imposti questi valori.

- Aggiungi un metodo public presentati() che stampi un messaggio con il nome e l'età.

------------------

Esercizio 2 - Classe Figlia "Studente":

- Crea una classe Studente che erediti da Persona.

- Aggiungi una proprietà private $voti che sia un array vuoto inizialmente.

- Aggiungi un metodo public aggiungiVoto() che accetti un numero e lo aggiunga all'array $voti.

- Crea un metodo public calcolaMedia() che restituisca la media dei voti.

------------------

Esercizio 3 - Classe Corso (Statico e Array di Oggetti):

- Crea una classe Corso.

- Aggiungi una proprietà public static $numeroIscritti inizializzata a 0.

- Aggiungi una proprietà public static $listaStudenti che sia un array vuoto.

- Crea un metodo public static iscriviStudente() che accetti un oggetto Studente come parametro.

- All'interno di questo metodo, aggiungi l'oggetto Studente all'array $listaStudenti e incrementa $numeroIscritti.

------------------

Esercizio 4 - Usa il Sistema:

- Crea due oggetti della classe Studente con nomi ed età diversi.

- Usa il metodo aggiungiVoto() per dare a ciascuno studente almeno tre voti.

- Utilizza la classe Corso per iscrivere entrambi gli studenti.

- Stampa il numero totale di studenti iscritti usando la proprietà statica $numeroIscritti.

- Esegui un ciclo foreach sull'array $listaStudenti della classe Corso per:

    - Chiamare il metodo presentati() di ogni studente.

    - Stampare la loro media dei voti usando il metodo calcolaMedia().:
*/

# creation of a class Person
class Person {
    # properties
    private $name;
    private $age;

    # constructor
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    # methods 
    public function introducedYourself() {
        echo "My name is " . $this->name . " and i have " . $this->age . " years old.";
    }
}

# creation of a calss "Student" who inherits (eredita) from class "Person"
class Student extends Person {
    # property 
    private $votes;

    # construct
    public function __construct($name, $age, $votes){
        parent::__construct($name,$age); # we need it to extends all the Parent class from the Child one
        $this->votes = []; # whit empty array 
    }

    # methods
    public function addVotes($vote) { # parameter $vote represent the number
        # accapet and add a number inside the array
        $this->votes[] = $vote;
    }

    public function calcMedia($votes = []) { # calculating the media of all votes in the array
        $totalVotes = 0; # start whit 0
        
        foreach ($votes as $vote) { # iteration of the array whit foreach loop
            $totalVotes += $vote->addVotes(); # calc the media and added all votes in the array
        }
        
        $numberOfVotes = count($votes); # how many values do we need to calculate the avarage grade? 
        
        if ($numberOfVotes > 0) {
            return $totalVotes / $numberOfVotes;
        } else {
            return 0;
        }
    }
}

# creation of class Course
class Course {
    # properties
    public static $numberOfSub;
    public static $studentsList;

    # construct 
    public function __construct($numberOfSub, $studentsList) {
        $this->numberOfSub = 0;
        $this->studentsList = [];
    }

    # method
    public static function signUpStud($student) { # accept an object "student" as parameter
        $this->studentsList[] = $student; # add the students into the array "studentsList"
        $this->numberOfSubs++; # increment the number of subscribers
    }
}

# creation of new obj
$studentOne = new Student("Jhon", "Pinkfloid", addVotes(1, 3.5, 9));
$studentTwo = new Student("Russel", "Fluded", addVotes(4, 5.6, 2));
# static method? We need :: for use it
Student::$studentOne->signUpStud();
Student::$studentTwo->signUpStud();
Course::$numberOfSub;
# we need to iterate on the array "studentsList"
foreach($studentsList as $singleStudent){
    $singleStudent->introducedYourself();
    $singleStudent->calcMedia();
}





