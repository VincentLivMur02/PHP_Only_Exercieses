<?php

/*

Esercizio 2:

- Hai un conto con 100 euro. 
- Preleva 20 euro. Usando un ciclo do...while, continua a prelevare 20 euro finché il saldo non è inferiore a 20. 
- Stampa il saldo finale e il numero di prelievi effettuati.

*/

$balance = 100;
$withdrawals = 0;

do {
    $balance -= 20; // Withdraw 20 euros
    $withdrawals++; // Count the withdrawal
    echo "You have withdrawn. The current balance is: " . $balance . "€.<br>";
} while ($balance >= 20); // The cycle continues as long as the balance is >= 20

echo "Withdrawals made: " . $withdrawals . ". Final balance: " . $balance . "€.";