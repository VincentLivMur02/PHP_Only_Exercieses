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
class Vehicle {
    # property
    public $type = "Generic";
    protected $brand;

    public function __construct($brand = "General"){
        $this->brand = $brand;
    }

    // Public ‘getter’ method to access the brand
    public function getBrand() {
        return $this->brand;
    }
}

class Car extends Vehicle implements Driveable {
    public function __construct($brand) {
        parent::__construct($brand);
        $this->type = "Car";
    }

    public function drive() {
        echo "Car is driving.<br>";
    }
}
class Motorbike extends Vehicle implements Driveable {
    public function __construct($brand) {
        parent::__construct($brand);
        $this->type = "Motorbike";
    }
    
    public function drive() {
        echo "Motorbike is driving.<br>";
    }
}

class Garage {
    public static $inventory = [];

    # methods
    public static function addVehicle(Vehicle $vehicle){
        self::$inventory[] = $vehicle; 
    }
    public static function analyzeInventory(){
        echo "--- Inventory Analysis ---<br>";
        foreach(self::$inventory as $foundVehicle){
            if ($foundVehicle instanceof Car) {
                echo "A car was found in the garage.<br>";
            } else if ($foundVehicle instanceof Motorbike) {
                echo "Found a motorbike in the garage.<br>";
            } else {
                echo "Found an unknown vehicle.<br>";
            }

            // Check for Driveable interface
            if ($foundVehicle instanceof Driveable) {
                echo "This vehicle can be driven.<br>";
            }
        }
        echo "--------------------------<br>";
    }

    public static function printInfoVehicle(Vehicle $vehicle){
        if($vehicle instanceof Car){
            echo "It's a " . $vehicle->type . " branded " . $vehicle->getBrand() . ".<br>";
        } else if ($vehicle instanceof Motorbike) {
            echo "It's a " . $vehicle->type . " branded " . $vehicle->getBrand() . ".<br>";
        }
    }
}

// Create objects and test the system
$myCar = new Car("Fiat");
$myMotorbike = new Motorbike("Ducati");

// Add vehicles to inventory
Garage::addVehicle($myCar);
Garage::addVehicle($myMotorbike);

// Analyse inventory
Garage::analyzeInventory();

// Print info for a single vehicle
Garage::printInfoVehicle($myCar);
Garage::printInfoVehicle($myMotorbike);



