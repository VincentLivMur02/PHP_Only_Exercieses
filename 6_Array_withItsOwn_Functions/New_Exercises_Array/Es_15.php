<?php

/*

Esercizio 15:

- Crea due array, es ["a", "b"] e es ["c", "d"].

- Uniscili in un nuovo array e stampa il risultato.

*/

$arr1 = ["Hello"];
$arr2 = ["World"];
echo "Original array 1 and 2 <br>";
print_r($arr1);
print_r($arr2);


$union = array_merge($arr1, $arr2);
echo "<br> Union of the two arrays <br>";
print_r($union);
