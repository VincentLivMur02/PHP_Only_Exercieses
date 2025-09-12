<?php

/*

Esercizio 6:

- Crea una funzione stampaArgomenti() che accetti un numero variabile di parametri e stampi ogni argomento su una nuova riga, mostrando anche il numero totale di argomenti passati. 
- Usa le funzioni func_get_args() e func_num_args().

*/

function stampArguments() {
    $numArgs = func_num_args(); # new Local var for getting the NUM of total arguments in the function
    echo "Number of arguments : $numArgs <br>";

    $argumentList = func_get_args(); # Local var for getting the ARGUMENTS
    for ($arguments = 0; $arguments < $numArgs; $arguments++){ # create a for loop to "increment" and stamp the arguments in new lines
        echo "Argument $arguments is: " . $argumentList[$arguments] . "<br>";
    }
}

stampArguments(1, "Pizza", "43", 4.5);