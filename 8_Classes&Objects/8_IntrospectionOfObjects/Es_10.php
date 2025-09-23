<?php

/*

Esercizio 10 - Test Finale e Riflessione:

- Crea una classe Report con un metodo genera() che, al suo interno, stampa il proprio nome di classe e un messaggio.

- Crea una funzione eseguiReport(object $report) che usa l'introspezione per verificare che l'oggetto abbia il metodo genera() prima di chiamarlo.

- In un commento finale, riassumi come l'introspezione può aiutare a scrivere codice più sicuro e flessibile.

*/

class Report {
    public function generate() {
        $user5 = new User();
        echo "The name of the class is: " . get_class($user5) . " and the message is: 'Hello Hello' <br>";
    }
}

function exectueReport(object $report) {
    if($report ){

    }
}



