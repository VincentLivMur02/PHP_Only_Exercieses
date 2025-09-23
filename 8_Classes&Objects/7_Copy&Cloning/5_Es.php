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

    # construct
    public function __construct($name) {
        $this->name = $name;
    }
}

class Product {
    public $price = 100;
    public $tags = [];

    public function addTag($name) {
        // The Product class contains an instance of the Tags class.
        $this->tags[] = new Tag($name);
    }

    public function __clone(){
        foreach($this->tags as $key => $tags){
            $this->tags[$key]= clone $tags;
        }
    }
}

$original = new Product();
$original->addTag("Jhon");
$original->addTag("Fiona");

$copy = clone $original;
$copy->tags[0]->name = "Sara";

echo "Original product tag: " . $original->tags[0]->name . "<br>";
echo "Copy product tag: " . $copy->tags[0]->name . "<br>";

/*
Spiegazione:

Il metodo __clone() itera sull'array e clona ogni oggetto Tag, assicurando che le modifiche non si sovrappongano.

*/
