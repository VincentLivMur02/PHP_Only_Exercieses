<?php

/*

Esercizio 10:

- Un impiegato riceve un aumento del 3% ogni anno. 
- Il suo stipendio attuale è 20.000€. 
- Usa un ciclo for per calcolare e stampare il suo stipendio per i prossimi 5 anni.

*/

$salaryEmployee = 20000;
$years = 5;

for ($i = 0; $i <= 5; $i++) {
    echo (($salaryEmployee * 3 )/ 100 + 5) . "<br>";
}

// dubbi 