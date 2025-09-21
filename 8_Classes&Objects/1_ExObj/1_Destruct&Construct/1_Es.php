<?php

/*

Esercizio 1:

- Crea una classe Logger con una proprietà private $logFile. 
- Nel costruttore, apri un file di log ('log.txt') in modalità di scrittura ('w').

-----------

Esercizio 2:

- Aggiungi un metodo public write($message) che scriva un messaggio nel file di log.

-----------

Esercizio 3:

- Implementa il __destructor() nella classe Logger. 
- Il suo compito sarà quello di chiudere il file aperto nel costruttore. 
- Stampa un messaggio come "File di log chiuso." per confermare l'avvenuta chiusura.

-----------

Esercizio 4:

- Crea un'istanza della classe Logger, scrivi un messaggio nel file, e poi fai terminare lo script.

----------- 

Esercizio 5:

- Crea una seconda istanza di Logger.
- Scrivi un messaggio, e poi distruggi l'oggetto manualmente usando unset(). 
- Questo ti dimostrerà che il distruttore viene chiamato immediatamente.

----------- 

Esercizio 6:

- Crea una classe DatabaseConnection con una proprietà private $connection. 
- Nel costruttore, simula l'apertura di una connessione stampando "Connessione al database aperta.".

-----------  

Esercizio 7:

- Aggiungi un metodo public query($sql) che simuli l'esecuzione di una query, stampando "Eseguo la query: ..." 

-----------

Esercizio 8:

- Implementa il __destructor() per la classe DatabaseConnection. 
- All'interno, stampa un messaggio come "Connessione al database chiusa.".

-----------

Esercizio 9:

- Crea un'istanza di DatabaseConnection.
- Chiama il metodo query().
- Lascia che lo script termini in modo naturale e osserva come il distruttore si occupi di chiudere la connessione.

-----------

Esercizio 10:

- Crea un'istanza della classe Logger e un'istanza di DatabaseConnection nello stesso script. 
- Osserva l'ordine in cui i costruttori e i distruttori vengono chiamati e spiega il risultato.

*/

class Logger {
    private $logFile;

    public function __construct($filePath) {
        $this->logFile = fopen($filePath, 'w');
        $pathMessage = ($this->logFile) ?
            "Log file '$filePath' opened" :
            "Error: unable to open file '$filePath'";
    }

    # method
    public function write($message) {
        if ($this->logFile) {
            fwrite($this->logFile, $message . "<br>");
        }
    }

    # destruct
    public function __destruct() {
        if ($this->logFile) {
            fclose($this->logFile);
            echo "File closed!<br>";
        }
    }
}

class DatabaseConnection {
    private $connection;

    public function __construct() {
        $this->connection = "Simulation of the connection";
        echo "Connection to database opened.";
    }

    # method 
 
    public function query($sql) {
        echo "Execute query: '$sql'<br>";
    }

    # destruct
    public function __destruct() {
        echo "Connection to database closed.";
    }
}


/* Exercise 4: Basic test */
echo "<h2>Exercise 4: Basic test</h2>";
$myLog = new Logger("log_base.txt");
$myLog->write("This is the first message.");
echo "Script running...<br>";
// The destructor will be called automatically at the end of the script
echo "<br>";


/* Exercise 5: Test with unset() */
echo "<h2>Exercise 5: Test with unset()</h2>";
$anotherLog = new Logger("log_unset.txt");
$anotherLog->write("This message will be destroyed.");
unset($anotherLog); // The destructor is called immediately
echo "The object has been destroyed.<br>";
echo "<br>";


/* Exercise 9: Final test */
echo "<h2>Exercise 9: Final test</h2>";
$myDb = new DatabaseConnection();
$myDb->query("SELECT * FROM users");
echo "Script running...<br>";
// The destructor will be called automatically at the end of the script
echo "<br>";


/* Exercise 10: Comparison */
echo "<h2>Exercise 10: Comparison</h2>";
$first = new Logger("log_comparison.txt");
$second = new DatabaseConnection();
echo "Script running. Objects will be destroyed at the end.<br>";
// The order of destruction is the reverse of the order of creation


