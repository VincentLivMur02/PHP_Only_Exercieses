<?php

/*

Esercizio 10:

- Un cinema ha prezzi diversi in base all'età:

- Se l'età è minore di 13, il biglietto costa 5 euro.

- Se l'età è tra 13 e 65, il biglietto costa 10 euro.

- Se l'età è maggiore di 65, il biglietto costa 7 euro.
- Crea una variabile $eta e usa una catena di if/elseif/else per stampare il prezzo del biglietto.

*/

$age = 66; 

if ( $age < 13 ) {
    echo "The ticket cost 5€.";
} elseif ( $age >= 13 && $age <= 65 ) {
    echo "The ticket cost 10€.";
} elseif ( $age > 65 ) {
    echo "The ticket cost 7€.";
} else {
    echo "Insert a valid age!";
}