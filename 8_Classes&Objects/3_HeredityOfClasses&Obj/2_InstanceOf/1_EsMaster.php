<?php

/*

Esercizio 1:

- Crea una classe Veicolo con una proprietà public $tipo (es. "generico").

------------

Esercizio 2:

- Crea una classe Auto che eredita da Veicolo e imposti il $tipo su "automobile".
- Crea una classe Moto che eredita da Veicolo e imposti il $tipo su "motocicletta".

-----------

Esercizio 3:

- Crea una classe Garage. 
- Aggiungi una proprietà public static $inventario che sia un array vuoto.

-----------

Esercizio 4:

- Nella classe Garage, crea un metodo public static aggiungiVeicolo($veicolo). 
- Questo metodo deve aggiungere l'oggetto veicolo all'inventario.

-----------

Esercizio 5:

- Crea alcune istanze di Auto e Moto.
- Usando il metodo statico, aggiungile all'inventario del Garage.

----------

Esercizio 6:

- Crea un metodo public static analizzaInventario() nella classe Garage.
- All'interno di questo metodo, usa un ciclo foreach per scorrere l'array $inventario.
- Per ogni oggetto, usa instanceof per verificare se è un'istanza della classe Auto o Moto e stampa un messaggio appropriato (es. "Trovata un'automobile nel garage.").

----------

Esercizio 7:

- Crea un metodo public static stampaInfoVeicolo($veicolo) nella classe Garage.
- All'interno, usa instanceof per controllare se il veicolo è un'istanza di Auto. 
- Se lo è, stampa un messaggio che includa il tipo specifico ($veicolo->tipo).

----------

Esercizio 8:

- Crea un'interfaccia Guidabile con un metodo guida().
- Fai in modo che le classi Auto e Moto implementino l'interfaccia Guidabile.

----------

Esercizio 9:

- Aggiungi un controllo instanceof nel metodo analizzaInventario() per verificare se l'oggetto implementa anche l'interfaccia Guidabile.
- Stampa un messaggio che lo confermi (es. "Questo veicolo può essere guidato.").

----------

Esercizio 10:

- Crea e aggiungi nuovi veicoli.
- Chiama il metodo Garage::analizzaInventario() per vedere i risultati.
- Chiama il metodo Garage::stampaInfoVeicolo() con un oggetto Auto e uno di un'altra classe (es. una classe Bicicletta che non estende Veicolo) per vedere come il controllo instanceof filtra il comportamento

*/

# interface
interface Driveable {
    public function drive();
}

# class
class Veicle {
    # property
    public $type = "Generic";
}

class Car extends Veicle implements Driveable {
    public $type;
}
class Motorbike extends Veicle implements Driveable {
    public $type;
}

class Garage {
    public static $inventory = [];

    # construct
    public function __construct($inventory) {
        $this->inventory = [];
    }

    # methods
    public static function addVeicle($veicle){
        $this->inventory[] = $veicle; 
    }
    public static function analyseInventory(){
        foreach($veicle as $foundVeicle){
            if ($foundVeicle instanceof Car || $foundVeicle instanceof Motorbike & $foundVeicle instanceof Driveable) {
                echo "You can drive this veicle";
            }
        }

    }
    public static function printinfoVeicle($veicle){
        if($veicle instanceof Car){
            $veicle->$type;
        }
    }
}

$newCar = new Car("Fiat");
$newMotorbike = new Motorbike("Ducati");
Garage::analyseInventory();
Garage::printinfoVeicle();



