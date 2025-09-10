<?php 

/*

Esercizio 8:

- In una pagina web, vuoi mostrare un messaggio di stato (es. "Caricamento in corso..."). 
- Usando un ciclo do...while, continua a mostrare il messaggio per 5 volte.

*/

$message = "Loading in progress...";

do {
    $message++;
    echo $message;
} while ($message < 5);

// dubbi 