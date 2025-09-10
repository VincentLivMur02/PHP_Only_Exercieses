<?php

/*

Esercizio 3:

- Chiedi a un utente di inserire un numero (ad esempio, 5). 
- Stampa la tabellina di quel numero da 1 a 10.

*/

$number = 5;

echo "You insert the number : " . $number . " Here is his multiplication table : <br>";

for ($i = 0; $i <= 10; $i++) {
    echo $number * $i. "<br>";
}



