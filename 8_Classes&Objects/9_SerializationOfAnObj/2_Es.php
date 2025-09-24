<?php

/*

Esercizio 4 - Serializzazione di Risorse:

- Crea una classe Database che contenga una proprietà non serializzabile (simuliamo con una stringa resource).

- Implementa __sleep() per non serializzare la risorsa.

- Implementa __wakeup() per "ripristinare" la risorsa.

- Serializza e deserializza l'oggetto per dimostrare il funzionamento.

*/

class Db {
    public $resource;

    public function __sleep() {}
    public function __wakeup() {
        echo "Resource is in progress..";
    }
}

$db = new Db();
$serializeDb = serialize($db);

echo "Serialized Db: " . $serializeDb . "<br>";

$deserializedDb = unserialize($serializeDb);

echo "Deserialized Db: " . $deserializedDb . "<br>";