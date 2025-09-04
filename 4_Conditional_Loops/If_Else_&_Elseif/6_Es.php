<?php

/*

Esercizio 6:

- Crea una variabile $giorno_della_settimana e assegna un giorno (es. "lunedì"). 
- Se il giorno è "sabato" o "domenica", stampa "È il weekend!", altrimenti "È un giorno lavorativo.".

*/

$dayOfTheWeek = "Friday";

if ($dayOfTheWeek === "Saturday" || $dayOfTheWeek === "Sunday") {
    echo "It's the weekend";
} else {
    echo "It's a working day";
}


