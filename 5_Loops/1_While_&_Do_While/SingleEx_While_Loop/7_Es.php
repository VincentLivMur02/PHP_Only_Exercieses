<?php


/*
  
Esercizio 7:

- Immagina di dover salvare dei dati. 
- Il salvataggio fallisce 3 volte e riesce alla quarta. 
- Simula questo scenario usando un ciclo while. 
- Stampa un messaggio per ogni fallimento e, alla fine, un messaggio di successo.

*/

$saved = false;
$attempts = 0;
while (!$saved) { // The loop continues until the condition $saved is false.
    $attempts++;
    if ($attempts === 4) {
        $saved = true;
        echo "Attempt " . $attempts . ": Data saved successfully!";
    } else {
        echo "Attempt " . $attempts . ": Saving failed.<br>";
    }
}