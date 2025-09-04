<?php

/*

Esercizio 8:

- Crea una variabile $mese e assegnale il nome di un mese ("gennaio", "febbraio", ecc.). 
- Usando uno switch, stampa il numero del mese corrispondente (es. "Gennaio è il mese 1.").

*/

$month = "Pizza";

switch ($month) {
    case "January":
        echo"The month ot <b>$month</b> is the <b>first</b> month of the year";
        break;
    case "February":
        echo"The month ot <b>$month</b> is the <b>second</b> month of the year";
        break;
    case "March":
        echo"The month ot <b>$month</b> is the <b>third</b> month of the year";
        break;
    case "April":
        echo"The month ot <b>$month</b> is the <b>fourth</b> month of the year";
        break;
    case "May":
        echo"The month ot <b>$month</b> is the <b>fifth</b> month of the year";
        break;
    case "June":
        echo"The month ot <b>$month</b> is the <b>sixth</b> month of the year";
        break;
    case "July":
        echo"The month ot <b>$month</b> is the <b>seventh</b> month of the year";
        break;
    case "August":
        echo"The month ot <b>$month</b> is the <b>eighth</b> month of the year";
        break;
    case "September":
        echo"The month ot <b>$month</b> is the <b>ninth</b> month of the year";
        break;
    case "October":
        echo"The month ot <b>$month</b> is the <b>tenth</b> month of the year";
        break;
    case "November":
        echo"The month ot <b>$month</b> is the <b>eleventh</b> month of the year";
        break;
    case "December":
        echo"The month ot <b>$month</b> is the <b>twelfth</b> month of the year";
        break;
    default:
        echo "Invalid month";
        break;
}


