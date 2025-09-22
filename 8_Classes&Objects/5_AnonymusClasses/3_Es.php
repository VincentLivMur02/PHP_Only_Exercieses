<?php

/*

Esercizio 4:

- Crea una classe base chiamata Veicolo con una proprietà public $tipo e un metodo muoviti().

- Crea una funzione gestisciVeicolo(Veicolo $veicolo) che chiami il metodo muoviti().

- Passa a questa funzione una classe anonima che estenda la classe Veicolo e sovrascriva il metodo muoviti() per stampare un messaggio specifico (es. "Un veicolo anonimo si sta muovendo.").

*/

class Veicle {
    public $type;

    public function __construct($type) {
        $this->type = $type;
    }

    # method
    public function move() {
        echo "The veicle is moveing.";
    }
}

function manageVeicle(Veicle $veicle) {
    $veicle->move();
}

$printMessage = new class implements Veicle {
    public function move() {
        echo "An anonymus veicle <b>" . $this->type . "<b> is moveing.";
    }
};

manageVeicle("Fiat");

// dubbi