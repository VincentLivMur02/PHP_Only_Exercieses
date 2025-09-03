<?php

/*

Esercizio 2:

- Crea una variabile $eta con valore 20 e una variabile $patente con valore true. 
- Controlla se l'età è maggiore o uguale a 18 E se la patente è true. 
- Stampa il risultato.

*/

# dichiarazione di variabili
$age = 20;
$license = true;

# controllo età e patente
$check = $age >= 18 && $license === true;

echo $check; # 1 ( true ) sia l'età che la patente hanno superato il controllo :)
