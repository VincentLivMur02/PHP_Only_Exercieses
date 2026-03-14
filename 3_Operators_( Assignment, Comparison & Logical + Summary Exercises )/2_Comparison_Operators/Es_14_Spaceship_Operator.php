<?php

/*

📝 Traccia: Il Confronto tra Inventari
- Immagina di avere due scatole di oggetti (es. monete d'oro, pozioni, frecce) rappresentate come array. Vuoi sapere quale delle due scatole è "più ricca" o se sono identiche.

- Requisiti:

    - Definisci $zainoA = [10, 5, 20]; (10 monete, 5 pozioni, 20 frecce).

    - Definisci $zainoB = [10, 8, 15]; (10 monete, 8 pozioni, 15 frecce).

    - Usa lo spaceship operator per confrontare direttamente $zainoA <=> $zainoB.

    - Stampa un messaggio diverso per i tre risultati (-1, 0, 1).

Nota tecnica: PHP confronta il primo elemento di entrambi. Se sono uguali, passa al secondo, e così via. Appena trova una differenza, lo spaceship operator emette il verdetto.

*/

$zainoA = [
    "monete" => 10,
    "pozioni" => 5,
    "frecce" => 20
];

$zainoB = [
    "monete" => 10,
    "pozioni" => 8,
    "frecce" => 15
];

$zainiConfronto = $zainoA <=> $zainoB;

switch ( $zainiConfronto ){
    case -1:
        echo "Gli zaini non sono uguali. Tutte le quantità degli oggetti sono diverse.";
        break;
    case 0:
        echo "Gli zaini sono uguali. Le quantità degli oggetti sono identiche.";
        break;
    case 1:
        echo "Gli zaini hanno solo alcuni oggetti in quantità eque.";
}