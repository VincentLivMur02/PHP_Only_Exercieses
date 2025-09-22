<?php

/*

Esercizio 1:

- Crea una variabile $saluto che contenga un'istanza di una classe anonima. 
- Questa classe deve avere un metodo saluta() che stampa "Ciao da una classe anonima!". 
- Chiama il metodo per verificare che funzioni.

----------

Esercizio 2:

- Crea una seconda variabile $messaggio che contenga un'istanza di una classe anonima. 
- Passa un argomento al costruttore (es. "professore"). 
- La classe anonima deve avere un costruttore che salva l'argomento in una proprietà private e un metodo stampaMessaggio() che utilizzi quella proprietà

----------

Esercizio 3:

- Crea un'interfaccia chiamata Archiviatore con un metodo salva($dati).

- Crea una funzione elaboraDati(Archiviatore $archiviatore) che riceva come parametro un oggetto di tipo Archiviatore e chiami il suo metodo salva().

- Passa a questa funzione una classe anonima che implementi l'interfaccia Archiviatore e che stampi un messaggio come "Dati salvati in un database."

----------

Esercizio 4:

- Crea una classe base chiamata Veicolo con una proprietà public $tipo e un metodo muoviti().

- Crea una funzione gestisciVeicolo(Veicolo $veicolo) che chiami il metodo muoviti().

- Passa a questa funzione una classe anonima che estenda la classe Veicolo e sovrascriva il metodo muoviti() per stampare un messaggio specifico (es. "Un veicolo anonimo si sta muovendo.").

----------

Esercizio 5:

- Immagina di avere una funzione eseguiCallback($callback) che si aspetta un oggetto con un metodo run().

- Passa a questa funzione una classe anonima che abbia un metodo run() che esegua un'operazione semplice, come stampare la data e l'ora attuali.

----------

Esercizio 6:

- Le classi anonime possono accedere a variabili del contesto esterno (l'ambito in cui sono definite) usando la parola chiave use.

- Crea una variabile $nome = "Mario";.

- Crea una classe anonima che, nel suo costruttore, usi la variabile $nome e la salvi in una sua proprietà interna. Il costruttore deve essere definito come __construct() use ($nome).

- Crea un metodo presentati() che utilizzi la proprietà salvata per stampare "Ciao, mi chiamo Mario!".

----------

Esercizio 7:

- Crea un array vuoto.

- Aggiungi all'array tre diverse istanze di classi anonime, ognuna con un metodo getInfo() che restituisca una stringa unica (es. "Oggetto A", "Oggetto B", "Oggetto C").

- Usa un ciclo foreach per scorrere l'array e chiamare il metodo getInfo() su ogni oggetto.
----------

Esercizio 8:

- È possibile definire un costruttore con più parametri in una classe anonima.

- Crea un'istanza di una classe anonima che accetti due parametri $titolo e $contenuto.

- Crea un metodo visualizzaArticolo() che stampi titolo e contenuto.

----------

Esercizio 9:

- I metodi di una classe anonima possono essere private.

- Crea una classe anonima con un metodo public che a sua volta chiami un metodo private per stampare un messaggio.

----------

Esercizio 10:

- Scrivi un piccolo script che utilizzi almeno tre dei concetti visti in questi esercizi (es. una classe anonima con costruttore che implementa un'interfaccia, passata a una funzione).

- Alla fine, scrivi un commento che spieghi a cosa servono le classi anonime e quando le useresti.

*/

# anonymus class = $variable = new class { execute code ... } 
$sayHello = new class { # ( ES1 )
    #method
    public function hello() {
        echo "Hello, I'm Class... Anonymus Class.<br>";
    }
};

$message = new class("Professor") {  # ( ES2 )
    # property
    private $name;

    #construct
    public function __construct($name) {
        $this->name = $name;
    }

    # method 
    public function printMessage() {
        echo "Hello " . $this->name . "!<br>";
    }
};

$sayHello->hello();
$message->printMessage();

// Exercise 3
echo "<h2>Exercise 3: Anonymous Class and Interface</h2>";
interface Archiver {
    public function save($data);
}

function processData(Archiver $archiver, $data) {
    $archiver->save($data);
}

processData(new class implements Archiver {
    public function save($data) {
        echo "Data saved in a database: " . $data . "<br>";
    }
}, "Document X");

// Exercise 4
echo "<h2>Exercise 4: Anonymous Class and Inheritance</h2>";
class Vehicle {
    public $type = "generic";
    public function move() {
        echo "A generic vehicle is moving.<br>";
    }
}

function manageVehicle(Vehicle $vehicle) {
    $vehicle->move();
}

manageVehicle(new class extends Vehicle {
    public function move() {
        echo "An anonymous vehicle is moving!<br>";
    }
});


// Exercise 5
echo "<h2>Exercise 5: Practical Use (Callback)</h2>";
function runCallback($callback) {
    $callback->run();
}

runCallback(new class {
    public function run() {
        echo "Operation completed! Current date and time: " . date("Y-m-d H:i:s") . "<br>";
    }
});

// Exercise 6
echo "<h2>Exercise 6: External Variables with use </h2>";
$name = "Mario";
$anonymousWithUse = new class($name) {
    private $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function introduce() {
        echo "Hello, my name is " . $this->name . "!<br>";
    }
};
$anonymousWithUse->introduce();

// Exercise 7
echo "<h2>Exercise 7: Anonymous Class in an Array</h2>";
$anonymousObjects = [
    new class {
        public function getInfo() { return "Object A"; }
    },
    new class {
        public function getInfo() { return "Object B"; }
    },
    new class {
        public function getInfo() { return "Object C"; }
    }
];

foreach ($anonymousObjects as $object) {
    echo $object->getInfo() . "<br>";
}

// Exercise 8
echo "<h2>Exercise 8: Multiple Constructors</h2>";
$article = new class("Fantastic Title", "Article content...") {
    private $title;
    private $content;
    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }
    public function displayArticle() {
        echo "<h3>" . $this->title . "</h3>";
        echo "<p>" . $this->content . "</p>";
    }
};
$article->displayArticle();


// Exercise 9
echo "<h2>Exercise 9: Private Methods</h2>";
$anonymousWithPrivateMethod = new class {
    public function performOperation() {
        $this->privateMethod();
    }
    private function privateMethod() {
        echo "This is a message from the private method.<br>";
    }
};
$anonymousWithPrivateMethod->performOperation();

// Exercise 10
echo "<h2>Exercise 10: Final Test and Reflection</h2>";
// Example: manage a connection to a service
interface Connector {
    public function connect();
}
function useConnector(Connector $connector) {
    $connector->connect();
}
useConnector(new class implements Connector {
    public function connect() {
        echo "Connection to payment service established.<br>";
    }
});

echo "<p>Anonymous classes are useful for creating disposable objects on the fly. I would use them to test interfaces, as callbacks in a function, or for very specific and temporary behaviours, without cluttering the code with formal class definitions that I won't use elsewhere.</p>";
