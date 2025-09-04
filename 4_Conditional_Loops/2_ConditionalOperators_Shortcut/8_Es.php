<?php

/*

Esercizio 8:

- Crea una variabile $email e assegnale un valore. 
- Usando l'operatore ??, crea una variabile $notifica che contenga il valore di $email se è presente, altrimenti contenga "Nessuna email". 
- Stampa il valore di $notifica.

*/

$email = "hello@gmail.com";
// $email; # test 

$notification = $email ?? "No email";

echo $notification;



