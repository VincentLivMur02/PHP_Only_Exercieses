<?php

/*

Esercizio 8:

- Crea una funzione stampaLista() che accetta un array di stringhe. 
- La funzione deve stampare ogni elemento dell'array in una lista HTML non ordinata (<ul>).

*/


function stampList($arr) {
    echo "<ul>";
    foreach ($arr as $fruits) {
        echo "<li>" . $fruits . "</li>";
    }
    echo "</ul>";
}

stampList(["Apple", "Banana", "Hananas", "Mango", "Cherrys", "Strawberrys"]);