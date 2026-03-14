<?php

/*

📝 Ricostruzione URL (Implode)
- Immagina di voler costruire un "breadcrumb" (le briciole di pane dei siti, tipo Home > Prodotti > Scarpe).

- Obiettivo: Unire pezzi di percorso in una stringa elegante.

    - Crea un array $percorso = ["Home", "Elettronica", "Smartphone", "Iphone15"];.

    - Usa implode per unire i pezzi usando il simbolo > come colla.

    - Stampa il risultato finale.

    - Sfida Extra: Trasforma tutto l'array in maiuscolo prima di incollarlo (vediamo se ti ricordi come fare, magari con un ciclo o una funzione!).

*/

$percorso = ["Home", "Elettronica", "Smartphone", "Iphone15"];

$nuovoPercorso = implode(" > ", $percorso);

foreach ($percorso as $nuovoPercorso) {
    echo strtoupper($nuovoPercorso);
}