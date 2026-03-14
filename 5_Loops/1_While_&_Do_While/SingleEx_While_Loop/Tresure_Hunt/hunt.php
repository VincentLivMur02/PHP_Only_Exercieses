<?php

/*

📝 Esercizio 3: La Caccia al Tesoro
- Vogliamo trovare un "Tesoro" in una mappa, ma non sappiamo quanto è lontano.

- Requisiti:

    - Crea una variabile $posizioneAttuale = 0;.

    - Crea una variabile $posizioneTesoro = rand(10, 50); (il tesoro è nascosto tra il passo 10 e il 50).

    - Usa un ciclo while che continui finché $posizioneAttuale è minore di $posizioneTesoro.

- Ad ogni giro:

    - Aumenta $posizioneAttuale di un valore casuale tra 1 e 5 (usa rand(1, 5)).

    - Stampa: "Sto camminando... sono al passo $posizioneAttuale".

    - Quando il ciclo finisce, stampa: "TESORO TROVATO al passo $posizioneTesoro!".

*/

# creazione var
$posizioneAttuale = 0;
# utilizzo rand per studiare le "coordinate" del mio tesoro
$posizioneTesoro = rand(10,50);

# inizializzazione ciclo while
while($posizioneAttuale < $posizioneTesoro) {
    # $posizioneAttuale aumenta di un valore
    # $posizioneAttuale++; correzzione, non ci serve

    # utilizzo rand
    # $posizioneAttuale .= rand(1,5); correzzione
    $posizioneAttuale += rand(1,5);

    echo "Sto camminando... sono alla coordinata <b>$posizioneAttuale</b><br>";
}

echo "TESORO TROVATO alla coordinata <b>$posizioneTesoro!</b>";