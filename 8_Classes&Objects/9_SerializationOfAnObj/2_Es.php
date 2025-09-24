<?php

/*

Esercizio 4 - Serializzazione di Risorse:

- Crea una classe Database che contenga una proprietà non serializzabile (simuliamo con una stringa resource).

- Implementa __sleep() per non serializzare la risorsa.

- Implementa __wakeup() per "ripristinare" la risorsa.

- Serializza e deserializza l'oggetto per dimostrare il funzionamento.

*/

class Database {
    private $resource; // A non-serialisable resource
    public $status = "disconnected";

    public function __construct() {
        $this->resource = "dummy connection";
        $this->status = "connected";
    }

    public function __sleep() {
    // Close the resource before serialising
    $this->resource = null;
    $this->status = "disconnected";
    return ['status']; // Save only the status, not the resource
}

    public function __wakeup() {
        // Restore the resource after deserialisation
        $this->resource = "new dummy connection";
        $this->status = "connected";
    }
}

$db = new Database();
echo "Initial status: " . $db->status . "<br>";
$dbString = serialize($db);
echo "Serialised string: " . $dbString . "<br>";
$db2 = unserialize($dbString);
echo "State after deserialisation: " . $db2->status . "<br>";