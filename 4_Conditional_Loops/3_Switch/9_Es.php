<?php

/*

Esercizio 9:

- Crea una variabile $stagione con il nome di una stagione. 
- Usa uno switch per stampare un messaggio a tema (es. per "inverno": "Fa freddo!").

*/

$season = "Spring";

switch ($season) {
    case "Spring":
        echo "<b>$season</b>: Wow, this tree of peach is beautiful";
        break;
    case "Summer":
        echo "<b>$season</b>: OH MY GOOD, it's so hot today";
        break;
    case "Autumn":
        echo "<b>$season</b>: Harry Potter night, Yuppy!";
        break;
    case "Winter":
        echo "<b>$season</b>: 'Santa is comig to town'! Happy christmas holidays";
        break;
    default: 
        echo "Invalid season";
        break;
}




