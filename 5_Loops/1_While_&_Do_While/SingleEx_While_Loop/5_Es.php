<?php

/*

Esercizio 5:

- La temperatura di un forno parte da 50 gradi e aumenta di 10 gradi ogni minuto. 
- Usando un ciclo while, calcola quanti minuti ci vorranno per raggiungere o superare i 180 gradi. 
- Stampa il numero di minuti alla fine.

*/

$temperature = 50;
$minutes = 0;
while ($temperature < 180) {
    $temperature += 10;
    $minutes++;
}
echo "It took " . $minutes . " minutes to reach 180 degrees.";

