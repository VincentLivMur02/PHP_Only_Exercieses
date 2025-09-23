<?php

/*

Esercizio 9 - Clonazione con Ciclo For:

- Crea una classe Contenitore con un array private $oggetti.

- Implementa __clone() per clonare ogni oggetto all'interno dell'array $oggetti usando un ciclo foreach.

- Testa il tuo Contenitore con una classe Punto (con proprietà x e y) per dimostrare che il ciclo di clonazione funziona correttamente.

----------------------

Esercizio 10 - Riflessione Finale:

- In un commento alla fine del tuo script, riassumi in breve la differenza tra copia per riferimento, copia superficiale e copia profonda, e spiega perché __clone() è essenziale per quest'ultima.

*/

class Point {
    public $x, $y;
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
}

class Container {
    private $objects = [];
    public function addObject(Point $object) { $this->objects[] = $object; }
    public function getObjects() { return $this->objects; }
    public function __clone() {
        foreach ($this->objects as $key => $object) {
            $this->objects[$key] = clone $object;
        }
    }
}

$originalContainer = new Container();
$originalContainer->addObject(new Point(1, 2));
$originalContainer->addObject(new Point(3, 4));

$copyContainer = clone $originalContainer;
$copyContainer->getObjects()[0]->x = 99;

echo "Original: " . $originalContainer->getObjects()[0]->x . "<br>";
echo "Copy: " . $copyContainer->getObjects()[0]->x . "<br>";

/*
Spiegazione:
Il ciclo in __clone() clona ogni oggetto nell'array, separando i dati.


ex 10:
La **copia per riferimento** punta allo stesso oggetto originale. 

La **copia superficiale** (con `clone`) crea una nuova istanza ma non clona gli oggetti annidati. 

La **copia profonda** (con `__clone()`) clona anche gli oggetti annidati, garantendo che l'originale rimanga intatto. 

Il metodo `__clone()` è essenziale per implementare la copia profonda e mantenere l'integrità dei dati.
*/