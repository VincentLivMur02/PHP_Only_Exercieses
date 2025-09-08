<?php

/*

Esercizio 9:

- Un giocatore ha 300 punti esperienza. 
- Crea una variabile $livello e, usando l'operatore ??, assegna il valore "Principiante".
- Successivamente, se i punti esperienza sono tra 100 e 500 (inclusi), aggiorna il livello a "Intermedio".  
- Se sono tra 501 e 1000 (inclusi), aggiorna il livello a "Avanzato". 
- Se sono superiori a 1000, aggiorna il livello a "Esperto". 
- Stampa il livello finale.

*/

$pointsExperience = 433;
$level = null;
$level = $level ?? "Beginner";

if ($pointsExperience >= 100 && $pointsExperience <= 500) {
    $level = "<b>Intermediate</b>";
} elseif ($pointsExperience >= 501 && $pointsExperience <= 1000) {
    $level = "<b>Advanced</b>";
} elseif ($pointsExperience > 1000) {
    $level = "<b>Expert</b>";
} else {
    echo "Level: " . $level;
}