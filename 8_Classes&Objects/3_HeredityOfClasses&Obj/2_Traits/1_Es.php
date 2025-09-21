<?php

/*

Esercizio 1:

- Crea un trait chiamato Validazione con un metodo public validaStringa($stringa) che restituisca true se la stringa non è vuota e ha almeno 5 caratteri.

-----------

Esercizio 2:

- Crea una classe Utente con una proprietà $nome. 
- Usa il trait Validazione e, nel costruttore, valida il nome usando il metodo del trait. - Se la validazione fallisce, stampa un messaggio di errore.

----------

Esercizio 3:

- Crea una classe Prodotto con una proprietà $sku (Stock Keeping Unit). 
- Usa lo stesso trait Validazione per validare lo SKU nel costruttore.

----------

Esercizio 4:

- Crea un trait chiamato MessaggioLog con un metodo protected log($messaggio) che stampi un messaggio formattato (es. "[LOG] ...").

----------

Esercizo 5:

- Nelle classi Utente e Prodotto, usa anche il trait MessaggioLog.

----------

Esercizio 6:

- Crea una classe Studente che extends Utente. 
- Il costruttore di Studente deve chiamare il costruttore del genitore (Utente) e aggiungere una proprietà $matricola.

----------

Esercizio 7:

- Cosa succede se un trait e la classe che lo usa hanno un metodo con lo stesso nome? 
- Prova a creare un metodo log() nella classe Utente e osserva cosa succede.

----------

Esercizio 8:

- Usa la sintassi insteadof per risolvere il conflitto dell'esercizio 7. 
- Fai in modo che il metodo della classe Utente venga usato al posto di quello del trait.

---------

Esercizio 9:

- I trait possono avere metodi statici. 
- Aggiungi al trait Validazione un metodo static validazioneRapida($stringa) che controlli se una stringa è più lunga di 10 caratteri.

---------

Esercizio 10:

- Crea un'istanza di Utente e Prodotto con dati validi e non validi e verifica il comportamento.

- Crea un'istanza di Studente e verifica che erediti il comportamento di Utente e usi anche il trait.

- Chiama il metodo static Validazione::validazioneRapida('una stringa molto lunga') per testare il suo funzionamento.
*/

# creation of a trait 
trait Validation {
    # method
    public function stringValidate($string) {
        $messageStringVal = (!is_string($string) || empty($string)  || strlen($string)) ? true : false;
    }

    public static function rapidValidation($string) {
        return strlen($string) > 10;
    }
}

trait logMessage {
    # method
    protected function log($newMessage) {
        echo "[LOG] " . $newmMessage . " successful! <br>";
    }
}

# creation of a class
class User {
    # key word "use" for include the trait
    use Validation, logMessage {
        // Exercise 8: Resolving the conflict with ‘insteadof’
        // We instruct PHP to use the log method of the User class
        // instead of the one in the MessageLog trait.
        logMessage::log insteadof Validation;
    }

    # properties
    public $name;

    # construct 
    public function __construct($name) {
        if ($this->stringValidate($name)) {
            $this->name = $name;
            $this->log("User '$name' created successfully.");
        } else {
            echo "Error: the name '$name' is invalid (minimum 5 characters).<br>";
        }
    }

    # method
    protected function log($newMessage) {
        echo "[LOG] " . $newMessage . " successful! <br>";
    }
}

class Student extends User {
    # property
    public $studNum; # matricola

    # construct 
    public function __construct($name, $studNum) {
        parent::__construct($name);
        $this->studNum = $studNum;
        $this->log("Student with registration number '$studNum' created.");
    }
}

class Product {
    # trait
    use Validation, logMessage;

    # property
    public $sku; # Stock Keeping Unit

    public function __construct($sku) {
        if ($this->stringValidate($sku)) {
            $this->sku = $sku;
            $this->log("Product '$sku' created successfully.");
        } else {
            echo "Error: SKU '$sku' is invalid (minimum 5 characters).<br>";
        }
    }
}

# instances
echo "<h2>User and Product Creation Test</h2>";
$validUser = new User("Giuseppe"); // Valid
$invalidUser = new User("Alex");   // Invalid

echo "<br>";

$validProduct = new Product("ABC-12345"); // Valid
$invalidProduct = new Product("123");      // Invalid

echo "<h2>Inheritance and Trait Test</h2>";
$student = new Student("Giovanna", "1024");

echo "<h2>Static Method Test</h2>";
var_dump(User::rapidValidation("a very long string")); // true
var_dump(Product::rapidValidation("short")); // false
