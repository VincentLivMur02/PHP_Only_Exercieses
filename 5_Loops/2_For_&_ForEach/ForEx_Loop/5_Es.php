<?php

/*

Esercizio 5:

- Stampa solo i numeri pari da 1 a 20. 
- Usa un ciclo for e un'istruzione if

*/


echo "Here are the num even from 1 to 20: <br>";
for ($i = 0; $i <= 20; $i++) {
    if ($i % 2 === 0) {
        echo $i . "<br>";
    } 
}