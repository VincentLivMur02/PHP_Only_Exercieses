<?php

/*

Esercizio 7 - Comportamento di __clone():

- Crea una classe Log con una proprietà private $timestamp inizializzata nel costruttore con la data e ora attuali.

- Implementa un metodo __clone() che aggiorni il timestamp del nuovo oggetto clonato all'istante della clonazione.

- Crea un'istanza Log, attendi 1 secondo (sleep(1)), e poi clonala.

*/

class Log {
    private $timestamp;
    public function __construct() {
        $this->timestamp = date("H:i:s");
    }
    public function getTimestamp() { return $this->timestamp; }
    public function __clone() {
        sleep(1);
        $this->timestamp = date("H:i:s");
    }
}

$original = new Log();
$copy = clone $original;

echo "Original timestamp: " . $original->getTimestamp() . "<br>";
echo "Copy timestamp: " . $copy->getTimestamp() . "<br>";

/*
Spiegzione: 

Il __clone() ha messo in pausa lo script per 1 secondo, poi ha aggiornato il timestamp dell'oggetto clonato.

*/