<?php

/*

🚀 Facciamo un passo avanti: JSON Annidati
- Nella realtà, i JSON non sono quasi mai così "piatti". Spesso contengono array dentro altri array. Proviamo a gestire un caso un po' più complesso per vedere come te la cavi con i livelli di profondità.

    - Situazione: Un server ti invia i dati di un utente che ha una lista di ordini.

    - Traccia Esercizio 17:

    - Copia questa stringa JSON (occhio agli apici singoli esterni):

        - $json_complesso = '{"nome": "Luca", "citta": "Napoli", "interessi": ["PHP", "Tennis", "Moto"]}';

    - Trasformalo in un array PHP (associativo).

    - Stampa: "L'utente [nome] vive a [citta]."

    - Usa un ciclo foreach per stampare tutti i suoi interessi in una lista puntata.

*/

$json_complesso = '{"nome": "Luca", "città": "Napoli", "interessi": ["PHP", "Tennis", "Moto"]}';

$new_array = json_decode($json_complesso, true); # traformo in array associativo

echo "L'utente " . $new_array["nome"] . " vive a " . $new_array["città"]; # stampo la stringa con i dati che mi interessano

foreach($new_array["interessi"] as $new_array["interesse"]) {
    echo "<ul>";
        echo "<li>". $new_array["interesse"] . "</li>";
    echo "</ul>";
}



