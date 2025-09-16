<?php

/*

Esercizio 1:

- Crea una funzione esegui() che accetta una callback e un nome come parametro.  
- Passa una funzione anonima che saluti il nome, stampando un messaggio diverso in base all'ora del giorno (es. "Buongiorno" o "Buonasera").

*/

$sayHi = function ($name) {
    echo "Hello, $name!";
};

function exectue($sayHi, $name) {
    $sayHi($name);
}

exectue($sayHi, "Giovanni");

