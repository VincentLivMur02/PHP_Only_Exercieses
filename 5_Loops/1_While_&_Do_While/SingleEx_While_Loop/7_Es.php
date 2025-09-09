<?php


/*
  
Esercizio 7:

- Immagina di dover salvare dei dati. 
- Il salvataggio fallisce 3 volte e riesce alla quarta. 
- Simula questo scenario usando un ciclo while. 
- Stampa un messaggio per ogni fallimento e, alla fine, un messaggio di successo.

*/

$attempts = 0;

while ($attempts < 4) {
    if ($attempts <= 3) {
        echo "Failed";
    }
    $attempts++;
    echo $attempts;
}

echo "The last one attempt $attempts is Correct";