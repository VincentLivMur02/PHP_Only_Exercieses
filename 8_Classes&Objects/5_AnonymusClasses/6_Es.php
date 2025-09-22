<?php

/*

Esercizio 7:

- Crea un array vuoto.

- Aggiungi all'array tre diverse istanze di classi anonime, ognuna con un metodo getInfo() che restituisca una stringa unica (es. "Oggetto A", "Oggetto B", "Oggetto C").

- Usa un ciclo foreach per scorrere l'array e chiamare il metodo getInfo() su ogni oggetto.

*/

$arr = [];

public function analyzeArr(){
        echo "--- Arr Analysis ---<br>";
        foreach(self::$arr as $items){
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
}
