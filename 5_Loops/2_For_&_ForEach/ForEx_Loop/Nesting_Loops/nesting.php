<?php

/*

La Scacchiera di Coordinate
- Immagina di voler mappare una piccola griglia 3x3 (come quella del tris).

- Requisiti:

    - Usa un ciclo for esterno per le righe (da 1 a 3).

    - Dentro quel ciclo, inserisci un secondo ciclo for per le colonne (da 1 a 3).

    - All'interno del ciclo più interno, stampa le coordinate, ad esempio: (R1-C1) (R1-C2)...

    - Suggerimento: Usa un echo "<br>" alla fine del ciclo delle righe per andare a capo e creare visivamente la griglia.

*/

/* 

// Risposta errata:
# ciclo per le righe
for ($row = 0; $row < 3; $row++) {
    # ciclo per le colonne
    for ($column = 0; $column < 3; $column++) {
        echo "$row - $column";
    }
    echo "<br>";
}

*/

// Correzzione:
for ($row = 1; $row <= 3; $row++) { // Partiamo da 1 per leggibilità

    for ($column = 1; $column <= 3; $column++) {
        // Aggiungiamo uno spazio vuoto alla fine per separare i blocchi
        echo "(R$row-C$column) "; 
    }
    
    // Questo va a capo DOPO che tutte le colonne di una riga sono state stampate
    echo "<br>"; 
}