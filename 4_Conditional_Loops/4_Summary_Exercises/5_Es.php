<?php

/*

Esercizio 5:

- Un impiegato riceve un bonus del 15% se il suo fatturato annuale è superiore a 50.000 euro e ha lavorato almeno 2000 ore. 
- Altrimenti, se il fatturato è superiore a 25.000 euro, riceve un bonus del 5%. 
- Se non rientra in nessuna di queste categorie, non riceve bonus. 
- Calcola e stampa il bonus in euro.

*/

$annualSalary = 25600;
$hoursOfWork = 2000;

if ($annualSalary > 50000 && $hoursOfWork >= 2000) {
    $bonus = ($annualSalary * 15) / 100;
    echo "The employee has entitled to a 15% discount. The bonus is: " . $bonus . "€.";
} elseif ($annualSalary > 25000) {
    $bonus = ($annualSalary * 5) / 100;
    echo "The employee'll receive a 5% discount. The bonus is: " . $bonus . "€.";
} else {
    echo "The employee hasn't entitled to a discount.";
}
