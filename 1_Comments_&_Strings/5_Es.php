<?php

/*

Esercizio 5:

- Crea una variabile $animale e assegnale il valore "cane".
- Stampa a schermo la frase 'Il mio animale preferito è il $animale'. 
- Poi stampa di nuovo la stessa frase, ma questa volta usando le virgolette doppie. 
- Che differenza noti nell'output?

*/

$animal = "Dog";

echo "My favourite aniaml is the $animal", PHP_EOL; # Con " " ritorna il valore della variabile
echo 'My favourite aniaml is the $animal'; # Con ' ' ritorna il nome della variabile

/*

Con le prime, la variabile viene stampata come testo, con le seconde viene "interpretata" e ne viene mostrato il valore.

*/
