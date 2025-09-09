<?php

/*

Esercizio 2:

- Simula un login. 
- Usa una variabile $password con valore "test" e una variabile $tentativi con valore 0. 
- Usando un ciclo while, continua a chiedere la password (simulando l'input) finché non viene inserita quella corretta ("test"). 
- A ogni tentativo, incrementa $tentativi. 
- Quando la password è giusta, stampa "Accesso effettuato in X tentativi.".

*/

$password = "test";
$attempts = 0;


while ($attempts < 3) { # 3 attempts to verify the password
    echo $attempts . "<br>";
    $attempts++;
}

echo "Accsess effetuated in $attempts attempts.";

// dubbi..

