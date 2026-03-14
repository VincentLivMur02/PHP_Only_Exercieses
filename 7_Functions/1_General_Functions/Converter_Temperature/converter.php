<?php

/*

- Requisiti:Crea una funzione chiamata convertiCelsius.

- La funzione deve accettare un parametro $gradi.

- All'interno, calcola i Fahrenheit usando questa formula: $F = (gradi \cdot 1.8) + 32$.

- La funzione deve restituire (return) il risultato.

- Chiama la funzione passandole 20 gradi e stampa il risultato finale.

*/

# funzione con parametro
function convertiCelsius($gradi){
    # calcola i Fahrenheit 
    $F = ($gradi * 1.8) + 32;

    # restituire il risultato
    return "Ecco i gradi $F °";
}

echo convertiCelsius(20);