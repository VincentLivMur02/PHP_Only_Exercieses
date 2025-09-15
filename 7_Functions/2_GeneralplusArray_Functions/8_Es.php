<?php

/*

Esercizio 8:

- Crea una funzione stampaLista() che accetta un array di stringhe. 
- La funzione deve stampare ogni elemento dell'array in una lista HTML non ordinata (<ul>).

*/


function stampList($arr = ["Apple", "Banana", "Hananas", "Mango", "Cherrys", "Strawberrys"]) {
    foreach ($arr as $fruits) {
        echo "<ul>$fruits</ul><br>";
    }
}

stampList();