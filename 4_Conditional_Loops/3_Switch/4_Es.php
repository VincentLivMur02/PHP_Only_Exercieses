<?php

/*

Esercizio 4:

- Immagina di avere una variabile $codice_stato con un numero (es. 200, 404, 500). 
- Usando uno switch, stampa la descrizione del codice (es. per 200: "OK", per 404: "Pagina non trovata", per 500: "Errore interno del server").

*/

$stateOfCode = 500;

switch ($stateOfCode) {
    case 200:
        echo "Ok";
        break;
    case 404:
        echo "Page not found";
        break;
    case 500:
        echo "Internal error in the server";
        break;
    default:
        echo "Unknown error";
}

