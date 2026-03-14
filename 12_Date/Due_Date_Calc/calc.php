<?php

/*

📝 Il Calcolatore di Scadenza (Date + Calcoli)
- Le date non servono solo a essere stampate, ma anche a calcolare il futuro. PHP permette di modificare le date usando stringhe come "+1 month".

- Obiettivo: Calcolare la scadenza di un abbonamento.

    - Crea una variabile $oggi = date("Y-m-d");.

    - Usa la funzione strtotime per aggiungere 30 giorni a $oggi.

    - Stampa: "Abbonamento attivato il: $oggi".

    - Stampa: "Scadrà il: [data calcolata]" (formattata come Giorno/Mese/Anno).

*/

# sbagliato
/*
$oggi = date("Y-m-d");

$oggi = strtotime("+30 days");

echo "Abbonamento attivato il: $oggi <br>";
echo "Scadrà il: " . date("d-m-Y"); 
*/


# correzzione
$oggi = date("Y-m-d");
$domani_ts = strtotime("+30 days"); // 1. Calcola i secondi

echo "Abbonamento attivato il: $oggi <br>";
echo "Scadrà il: " . date("d/m/Y", $domani_ts);      // 2. Trasforma i secondi in data; 