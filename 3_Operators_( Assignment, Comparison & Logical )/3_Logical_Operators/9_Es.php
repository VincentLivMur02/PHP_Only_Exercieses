<?php

/*

Esercizio 9:

- Crea una variabile $stagione con valore "primavera". 
- Controlla se la stagione è "estate" O "autunno" O "inverno" O "primavera". 
- Stampa il risultato.

*/

$season = "spring";

$result = $season === "summer" || $season === "autumn" || $season === "winter" || $season === "spring";

echo "The season in the variable is: " . $result;