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

    # public getters to access private properties
    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    # methods 
    public function introducedYourself() {
        echo "My name is " . $this->name . " and I am " . $this->age . " years old.<br>";
    }
}

# creation of a class "Student" who inherits (eredita) from class "Person"
class Student extends Person {
    # property 
    private $votes = []; # votes array initialized as empty

    # construct
    public function __construct($name, $age){
        parent::__construct($name, $age); 
    }

    # methods
    public function addVotes($vote) {
        $this->votes[] = $vote;
    }

    public function calcMedia() {
        if (count($this->votes) > 0) {
            return array_sum($this->votes) / count($this->votes);
        } else {
            return 0;
        }
    }
}

# creation of class Course
class Course {
    # properties
    public static $numberOfSubscribers = 0;
    public static $studentsList = [];

    # method
    public static function signUpStudent(Student $student) {
        self::$studentsList[] = $student;
        self::$numberOfSubscribers++;
    }
}

# Esercizio 4 - Usa il Sistema
# creation of new obj
$studentOne = new Student("John", 25);
$studentTwo = new Student("Russell", 30);

# give votes to each student
$studentOne->addVotes(9);
$studentOne->addVotes(7.5);
$studentOne->addVotes(8);

$studentTwo->addVotes(6.5);
$studentTwo->addVotes(8);
$studentTwo->addVotes(9.5);

# use the static method from Course class to register students
Course::signUpStudent($studentOne);
Course::signUpStudent($studentTwo);

# print total subscribers
echo "Total students subscribed: " . Course::$numberOfSubscribers . "<br><br>";

# iterate on the array "studentsList"
foreach(Course::$studentsList as $singleStudent){
    $singleStudent->introducedYourself();
    echo "Average grade: " . $singleStudent->calcMedia() . "<br><br>";
}



