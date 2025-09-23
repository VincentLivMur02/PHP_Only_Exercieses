<?php

/*

Esercizio 5 - Copia di un Oggetto con un Array di Oggetti:

- Crea una classe Tag con una proprietà public $nome.

- Modifica la classe Prodotto aggiungendo una proprietà public $tags che sia un array di istanze di Tag. Aggiungi un metodo addTag($nome) per aggiungere un tag all'array.

- Implementa __clone() per clonare ogni Tag all'interno dell'array $tags.

- Crea un'istanza di Prodotto, aggiungi alcuni tag, e poi clonala. Modifica il nome di un tag sull'oggetto clonato. Stampa i nomi dei tag di entrambi gli oggetti e spiega il risultato.

*/

class Tag {
    public $name;
}

class Product {
    public $tags = [];

    public function __construct() {
        // The Product class contains an instance of the Tags class.
        $this->tags = new Tag();
    }

    public function __clone(){
        $this->tags = clone $this->tags;
    }

    # method
    public function addTag($name) {
        $this->tags[]++;
    }
}

$newProd = new Product(["Jhon", "Vincenzo", "Martina", "Sara"]);
$copyNewProd = clone $newProd;
$copyNewProd->addTag(["Giovanni"]);

echo $newProd;


