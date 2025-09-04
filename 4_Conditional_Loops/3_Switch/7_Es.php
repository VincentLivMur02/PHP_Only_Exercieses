<?php

/*

Esercizio 7:

- Crea una variabile $tipo_veicolo e assegnale un tipo (es. "auto", "bici", "moto"). 
- Usando uno switch, stampa il numero di ruote per ogni veicolo (es. "L'auto ha 4 ruote."). 
- Aggiungi un default per i veicoli non elencati.

*/

$typeOfVeichle = "Car";

switch ($typeOfVeichle) {
    case "Bike":
        echo "The <b>$typeOfVeichle</b> has 2 wheels";
        break;
    case "Car":
        echo "The <b>$typeOfVeichle</b> has 4 wheels";
        break;
    case "Sidecar":
        echo "The <b>$typeOfVeichle</b> has 3 wheels";
        break;
    default:
        echo "<b>Invalid veichle</b>";
        break;
}


