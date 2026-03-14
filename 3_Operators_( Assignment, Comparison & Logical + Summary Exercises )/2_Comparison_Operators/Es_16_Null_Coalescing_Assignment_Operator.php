<?php

/*

📝 Ultima sfida: Il Null Coalescing Assignment Operator (??=)
- Esiste una versione "abbreviata" (introdotta in PHP 7.4) che serve ad assegnare un valore a una variabile solo se questa è null. È utilissima per impostare valori di default veloci.

- Traccia: Configurazione Opzionale
- Immagina di avere una variabile $configurazione. Se è già impostata, non toccarla; se è null, impostala su "Attiva".

- Requisiti:

    - Definisci $impostazione = null;

    - Usa l'operatore ??= per assegnarle il valore "Default".

    - Definisci un'altra variabile $stato = "Manuale";

    - Usa lo stesso operatore ??= per provare ad assegnarle "Automatico".

    - Stampa entrambe le variabili.

*/


// CASO 1: La variabile è NULL
$impostazione = null;
$impostazione ??= "Valore di Default"; 
// Traduzione: "Visto che $impostazione è null, ora diventa 'Valore di Default'"

// CASO 2: La variabile ha già un valore
$stato = "Manuale";
$stato ??= "Automatico";
// Traduzione: "$stato non è null, quindi ignoro 'Automatico' e tengo 'Manuale'"

echo "Impostazione: " . $impostazione . "<br>"; // Stamperà: Valore di Default
echo "Stato: " . $stato . "<br>";               // Stamperà: Manuale


/*

Si usa tantissimo per "inizializzare" le variabili. Invece di scrivere:
if ($x === null) { $x = 10; }

Scrivi semplicemente:
$x ??= 10;

*/