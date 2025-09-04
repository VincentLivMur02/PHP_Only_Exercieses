<?php

/*

Esercizio 5:

- Crea una variabile $nome_utente. 
- Aggiungi un commento in cui dici che la variabile non è stata inizializzata (quindi è null). 
- Crea una seconda variabile $saluto e assegnale il valore di $nome_utente usando l'operatore ??. 
- Se $nome_utente è null, assegna il valore di default "Ospite". 
- Stampa il valore di $saluto.
 
*/

$user_name; # no inizialitation of the variable ( null )
$say_Hello = $user_name ?? "Host"; # if the $user_name is null, than the result is "Host"

echo $say_Hello;


