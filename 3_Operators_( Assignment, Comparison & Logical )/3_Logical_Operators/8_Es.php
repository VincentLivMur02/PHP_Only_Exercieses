<?php

/*

Esercizio 8:

- Crea quattro variabili: $ha_biglietto = true, $ha_documento = false, $eta = 25, $evento_gratuito = false. Controlla se una persona può entrare all'evento se:

- Ha il biglietto O l'evento è gratuito, E

- Ha il documento E l'età è maggiore o uguale a 18.

- Usa una sola riga per la condizione e stampa il risultato.

*/

$has_ticket = true;
$has_document = false;
$age = 25;
$free_event = false;

if ($has_ticket === true OR $free_event === true && $has_document === true && $age >= 18) {
    echo "The person can come in the event";
} else {
    echo "The person can't come in the event";
}