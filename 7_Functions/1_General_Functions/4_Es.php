<?php

/*

Esercizio 4:

- Crea una funzione calcolaMedia() che accetti un numero variabile di voti e calcoli la loro media.
- Usa le funzioni func_num_args() e func_get_args().

*/

function mediaCalc($num = 275, $num4 =1, $num5 = 15) {
    $numArg = func_num_args(); # Local scope = getting NUM of total arguments
    echo "Number of argumets: $numArg <br>";
    
    $argumentsList = func_get_args(); # Local scope = getting ONLY the arguments
    for ($arguments = 0; $arguments < $numArg; $arguments++) { # create a for loop to "increment" and stamp the arguments in new lines
        echo "Argument $arguments is: " . $argumentsList[$arguments] . "<br>"; 
    }

    $addictionOfMedia = $num1 + $num2 + $num3 + ;
    $media = $addictionOfMedia / $numArg;
}

mediaCalc($addictionOfMedia, $media);



