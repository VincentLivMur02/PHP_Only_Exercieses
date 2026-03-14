<?php

/*

📝 Traccia 1: Riscaldamento con il do...while
- Iniziamo proprio da quello che volevi ripassare meglio.

- Situazione: Immagina di lanciare un dado. Vuoi che il programma lanci il dado almeno una volta e continui a lanciarlo finché non esce un numero specifico (es: il 6).

- Requisiti:

    - Usa la funzione rand(1, 6) per generare un numero casuale tra 1 e 6.

    - Usa un ciclo do...while.

    - All'interno del ciclo, genera il numero e stampalo (es: "È uscito il numero: X").

    - La condizione del while deve far sì che il ciclo continui finché il numero è diverso da 6.

    - Quando esce il 6, il ciclo si ferma e stampi "Fine del gioco!".

*/

# Errore:
/*
$lanci = 0;

do {
    echo "E' uscitio il numero " . rand(1,6);
    if($lanci == 6) {
        echo "Fine del gioco!";
    };
    $lanci++;
} while ($lanci < 6);
*/

# Soluzione
$contatore = 0;

do {
    // 1. Salviamo il numero in una variabile per poterlo controllare dopo
    $dado = rand(1, 6); 
    $contatore++;
    
    echo "Lancio $contatore: È uscito il numero $dado <br>";

    // Il ciclo deve continuare FINCHÉ il dado NON è 6
} while ($dado != 6); 

echo "Fine del gioco! Ci sono voluti $contatore lanci.";

?>
