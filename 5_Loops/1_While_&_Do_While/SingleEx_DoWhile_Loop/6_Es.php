<?php

/*

Esercizio 6:

- Simula un login con username e password corretti. 
- Prova a loggarti con credenziali sbagliate (simulandole). 
- Usando un ciclo do...while, continua a tentare finché le credenziali non sono corrette.

*/

$input = "Pippo@gmail";

do {
    if ($input === "Pippo@gmail.com" && $input === "Pippo01") {
        echo "Credentials are correct";
    } 
    $input++;
} while ($input < 4);

// dubbi 


