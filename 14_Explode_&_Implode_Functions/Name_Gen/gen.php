<?php

/*

📝 Trasformatore di Dati (Explode & Implode)
- Obiettivo: Gestire una stringa di dati grezzi.

- Requisiti:

    - Hai questa stringa: $dati = "Pizza-Pasta-Mandolino-Gelato";.

    - Usa explode per trasformare questa stringa in un array chiamato $listaCibo.

    - Aggiungi un elemento all'array (es: "Caffè") usando la sintassi $listaCibo[] = "Caffè";.

    - Usa implode per trasformare l'array aggiornato in una nuova stringa dove i cibi sono separati da uno spazio e una virgola (es: "Pizza, Pasta, ..." ).

    - Stampa la stringa finale.

*/

# sbalgiato
/*
$dati = "Pizza-Pasta-Formaggio-Lattuga-Cetrioli";

print_r(explode("-", $dati)); # da stringa ad array

$listaCibo[] = "Caffè";

var_dump(implode(",", $listaCibo)); # da array a stringa

print_r($listaCibo);
*/

# correzzione
$dati = "Pizza-Pasta-Formaggio-Lattuga-Cetrioli";

// 1. TRASFORMO IN ARRAY (Explode)
$listaCibo = explode("-", $dati);

// 2. AGGIUNGO UN ELEMENTO
$listaCibo[] = "Caffè";

// 3. TRASFORMO DI NUOVO IN STRINGA (Implode)
// Usiamo la virgola come separatore
$stringaFinale = implode(", ", $listaCibo);

echo $stringaFinale; 
// Output: Pizza, Pasta, Mandolino, Gelato, Caffè