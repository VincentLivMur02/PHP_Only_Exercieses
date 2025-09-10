<?php

/*

Esercizio 10:

- Un impiegato riceve un aumento del 3% ogni anno. 
- Il suo stipendio attuale è 20.000€. 
- Usa un ciclo for per calcolare e stampare il suo stipendio per i prossimi 5 anni.

*/

$salary = 20000;
$percentage_increase = 0.03; // 3%

for ($year = 1; $year <= 5; $year++) {
    $increase = $salary * $percentage_increase;
    $salary += $increase;
    echo "Salary for year " . $year . ": " . round($salary, 2) . "€.<br>";
}