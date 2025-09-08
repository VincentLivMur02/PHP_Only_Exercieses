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
$bonus = 15;
$newBonus = 5;

if ($annualSalary > 50000 && $hoursOfWork === 2000) {
    echo "The employee'll receved a bonus of 15% on his annual salary. <br>
    Annual salary then: $annualSalary" . "€. <br>
    Annual salary now: " . $annualSalary = ($annualSalary * $bonus) / 100 + $annualSalary . "€.";
} elseif ($annualSalary > 25000) {
    echo "The employee'll receved a bonus of 5% on his annual salary. <br>
    Annual salary then: $annualSalary" . "€. <br>
    Annual salary now: " . $annualSalary = ($annualSalary * $newBonus) / 100 + $annualSalary . "€.";
} else {
    echo "The employee won't receved a bonus for his annual salary!";
}