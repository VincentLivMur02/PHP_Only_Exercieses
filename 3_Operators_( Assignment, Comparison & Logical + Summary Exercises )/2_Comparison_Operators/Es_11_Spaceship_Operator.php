<?php

/*

📝 Traccia: Il Validatore di Password
- Obiettivo: Creare uno script PHP che confronti la lunghezza di una password inserita dall'utente con una lunghezza minima richiesta (es. 8 caratteri).

 - Requisiti:

   - Definisci una variabile $passwordUtente con una stringa a tua scelta.

   - Definisci una variabile $lunghezzaMinima impostata a 8.

   - Usa lo spaceship operator per confrontare la lunghezza della password inserita con quella minima.


- Utilizza il risultato dell'operatore in uno statement switch (o una serie di if) per stampare i seguenti messaggi:

   - Se il risultato è -1: "Password troppo corta! (Errore)"

   - Se il risultato è 0: "Password al limite minimo, accettabile."

   - Se il risultato è 1: "Ottima password, è molto sicura!"

*/

$passwordUtente = "passWord";
$lunghezzaMinima = 8;

$risultato = strlen($passwordUtente) <=> $lunghezzaMinima;

switch ($risultato) {
    case -1:
        echo "Password troppo corta! (Errore)";
        break;
    case 0:
        echo "Password al limite minimo, accettabile.";
        break;
    case 1:
        echo "Ottima password, è molto sicura!";
        break;
    default:
        echo "Inserisici password";
}

