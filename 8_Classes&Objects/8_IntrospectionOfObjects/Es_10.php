<?php

/*

Esercizio 10 - Test Finale e Riflessione:

- Crea una classe Report con un metodo genera() che, al suo interno, stampa il proprio nome di classe e un messaggio.

- Crea una funzione eseguiReport(object $report) che usa l'introspezione per verificare che l'oggetto abbia il metodo genera() prima di chiamarlo.

- In un commento finale, riassumi come l'introspezione può aiutare a scrivere codice più sicuro e flessibile.

*/

class Report {
    public function generate() {
        echo "Report generation from " . get_class($this) . "<br>";
    }
}

function runReport(object $report) {
    if (method_exists($report, "generate")) {
        $report->generate();
    } else {
    echo "The object does not have the 'generate()' method.<br>";
    }
}

runReport(new Report());
runReport(new stdClass());


/*

Riflessione: 
L'introspezione ci permette di ispezionare gli oggetti e le classi in modo dinamico. 
Questo aiuta a scrivere codice più **sicuro** (evitando errori fatali) e più **flessibile** (gestendo oggetti con comportamenti diversi in un unico modo).

*/
