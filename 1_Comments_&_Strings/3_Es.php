<?php

/*

Esercizio 3:

- Crea due variabili, $nome e $cognome. Assegna il tuo nome e cognome. 
- Stampa a schermo una frase che li unisca (es. "Marco Rossi"). 
- Prova a farlo sia con le virgolette doppie che con unendo le due stringhe ( utilizzando il simbolo del . )
*/

$name = "Enzo";
$surname = "DelDev";

echo "Sono il Sign. $name $surname", PHP_EOL; # PHP_EOL per a capo
echo "Sono $name" . "$surname";