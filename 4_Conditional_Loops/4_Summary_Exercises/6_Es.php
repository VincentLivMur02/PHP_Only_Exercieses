<?php

/*

Esercizio 6:

- Crea una variabile $stato_ordine con un valore ("in_preparazione", "spedito", "consegnato").

- Se lo stato è "in_preparazione", stampa "Il tuo ordine è in fase di preparazione. Stima di consegna in 3 giorni.".

- Se lo stato è "spedito", stampa "Il tuo ordine è stato spedito. Stima di consegna domani.".

- Se lo stato è "consegnato", stampa "Il tuo ordine è stato consegnato. Grazie per l'acquisto!".

- Usa uno switch per gestire gli stati.

*/

$orderStatus = "Shipped";
#  in preparazione = in preparation
# spedito = delevered
# cosengato = shipped

switch ($orderStatus) {
    case "In preparation":
        echo "Your order is in preparation! Estimated delivery: in 3 days.";
        break;
    case "Delevered": 
        echo "Your order is delivered. Estimated delivery: tomorrow.";
        break;
    case "Shipped": 
        echo "Your order has shipped. Thank you for your purchase.";
        break;
    default:
        echo "This isn't a valid order.";
}