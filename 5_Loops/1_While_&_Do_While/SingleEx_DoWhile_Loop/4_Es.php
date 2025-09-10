<?php

/*

Esercizio 4:

- Simula un menu con tre opzioni (1. Pizza, 2. Pasta, 3. Insalata). 
- Chiedi all'utente di scegliere un'opzione. 
- Usando un ciclo do...while, continua a chiedere la scelta finché non viene inserita un'opzione valida (1, 2 o 3).

*/

$option = "Pizza";

do {
    if ($option === "Pizza" || $option === "Pasta" || $option === "Salad" ) {
        echo "The option $option is correct";
    }
    $option++;
    echo $option;
} while ($option < 4);

// dubbi 


