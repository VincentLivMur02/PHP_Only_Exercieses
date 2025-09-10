<?php

/*

Esercizio 3:

- Hai un array di numeri: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]. 
- Stampa solo i numeri pari usando un ciclo foreach e un'istruzione if.

*/

# inizialitation of array
$numberArr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10); 
 
echo "The even numbers are: <br>"; 

foreach ($numberArr as $numbers) {
    if ($numbers % 2 === 0) { # calc of the even numbers
        echo $numbers ."<br>"; 
    }
}


