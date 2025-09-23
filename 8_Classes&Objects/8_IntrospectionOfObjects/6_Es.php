<?php

/*

Esercizio 6 - Combinazione di funzioni:

- Crea una funzione debugOggetto($obj) che usi is_object() per verificare se l'input è un oggetto.

- Se lo è, la funzione deve stampare il nome della classe e una lista di tutti i suoi metodi pubblici usando get_class_methods().

*/

function debugObj($obj){
    if (is_object($obj)){
        echo get_class_methods($obj);
    }
}

debugObj();