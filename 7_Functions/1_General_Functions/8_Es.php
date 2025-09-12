<?php

/*

Esercizio 8:

- Crea una funzione creaMessaggio() che accetti due parametri, un nome e una città, e restituisca una stringa come "Ciao, mi chiamo [nome] e vivo a [città]."

*/

function createMessage($name, $city) {
    echo "Hello my name is $name and i live in $city!";
}

createMessage("Peter", "NewYork");