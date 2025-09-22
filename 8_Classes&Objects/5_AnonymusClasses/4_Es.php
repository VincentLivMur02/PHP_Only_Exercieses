<?php

/*

Esercizio 5:

- Immagina di avere una funzione eseguiCallback($callback) che si aspetta un oggetto con un metodo run().

- Passa a questa funzione una classe anonima che abbia un metodo run() che esegua un'operazione semplice, come stampare la data e l'ora attuali.

*/


function executeCallback() {
    $obj = new class {
        public function run() {
            echo "Today is: 22/09/2025 02:24 PM";
        }
    };
}

executeCallback(run());