<?php

/*

Recap:
for (Inizializzazione; Condizione; Incremento/Decremento) {
    // codice da eseguire 
}

- Inizializzazione: Viene eseguita una sola volta all'inizio ($i = 0).

- Condizione: Viene controllata prima di ogni esecuzione del codice ($i < 10).

- Incremento/Decremento: Viene eseguito dopo ogni esecuzione ($i++).

for ($i = 0; $i < 5; $i++) {
    echo $i;
}
// Stampa 01234

Esercizio 1:

- Stampa i numeri da 1 a 10, uno per riga, usando un ciclo for.

*/


for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";  
} 

# $i = 1 : inizialitation of the var $i set on num 1
# $i <= 10 : condition, stamp the numbers up to 10
# $i++ : increment the value 
# echo $i . "<br>" : stamp the num in a new line
