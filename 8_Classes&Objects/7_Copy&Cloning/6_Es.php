<?php

/*

Esercizio 6 - __clone() e Costruttore:

- Aggiungi un costruttore alla classe Prodotto che accetti un nome.

- Aggiungi il metodo __clone() che, oltre a clonare le specifiche, modifica anche il nome del prodotto clonato aggiungendo il suffisso "(Copia)".

- Crea un'istanza e clonala. Stampa i nomi di entrambi gli oggetti.

*/

class ProductWithName {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function __clone() {
        $this->name .= " (Copy)";
    }
}

$original = new ProductWithName("Book");
$copy = clone $original;

echo "Original name: " . $original->name . "<br>";
echo "Copy name: " . $copy->name . "<br>";

/*
Spiegazione: 
Il metodo __clone() modifica il nome solo sull'oggetto clonato.
*/