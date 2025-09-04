<?php

/*


Esercizio 4:

- Crea una variabile $colore e assegnale un valore. 
- Se il colore è "rosso", stampa "Colore principale", altrimenti "Altro colore". 
- Usa l'operatore ternario.

*/

$color = "RED"; # PHP isn't case sensitive, so this "RED" isn't the primary color

$primaryColor = ($color === "Red") ? "<b>$color</b> is the primary color" : "<b>$color</b> isn't the primary color";

echo $primaryColor;



