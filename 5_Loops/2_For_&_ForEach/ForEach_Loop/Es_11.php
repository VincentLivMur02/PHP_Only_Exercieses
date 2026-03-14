<?php

/*

📝 Traccia 4: Il Ciclo foreach (La Lista della Spesa)
- Sei pronto per l'ultimo dei "4 grandi"? Il foreach è speciale perché non ti serve un contatore $i. Si "aggancia" all'array e lo percorre elemento per elemento.

- Obiettivo: Gestire un inventario di oggetti.

- Requisiti:

    - Crea un array $zaino = ["Spada", "Scudo", "Pozione", "Mappa"];.

    - Usa il ciclo foreach per scorrere $zaino.

    - Per ogni oggetto, stampa: "Hai trovato: [nome oggetto]".

    - Fuori dal ciclo stampa: "Inventario terminato!".

- Sapevi che il foreach può darti anche la posizione (l'indice) dell'oggetto?

    - Puoi stampare anche il numero della tasca: con il suo oggetto contentuto al suo interno!
*/



# inizlizzazione array
$zaino = ["Spada", "Scudo", "Pozione", "Mappa"];

# ciclo foreach

foreach ($zaino as $valore) {
    # trovo gli oggetti singolaremente nello zaino

    echo "Hai trovato: $valore<br>";
}

echo "Inventario terminato!<br><br>";


# ciclare l'indice di ogni singolo oggetto
foreach ($zaino as $indice => $valore) {
    echo "Tasca dello zaino numero $indice: $valore<br>";
}