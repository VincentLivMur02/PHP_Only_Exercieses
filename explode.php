<?php

/*
$hugeString = "mela,pera,banana";
$separator = ",";

$explodeArray = explode($separator, $hugeString);
echo $hugeString;

print_r($explodeArray);
*/
$array_dei_tag = ["php", "array", "stringhe", "sviluppo", "web"];
$separatore = " | "; // Questa è la "colla"

$unito = implode($separatore, $array_dei_tag);
print_r($unito);
