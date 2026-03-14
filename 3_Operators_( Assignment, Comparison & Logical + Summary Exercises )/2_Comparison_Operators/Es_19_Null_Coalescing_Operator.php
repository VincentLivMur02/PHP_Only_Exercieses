<?php

/*

📝 Traccia: Il Riepilogo Spedizione
- Immagina di avere un sistema che deve decidere quale indirizzo usare per la spedizione di un pacco. L'utente può avere un "Indirizzo Temporaneo" (per un regalo), un "Indirizzo Predefinito" nel suo profilo, oppure, se mancano entrambi, il sistema deve usare il "Ritiro in Sede".

- Obiettivo: Usare ?? per trovare il primo indirizzo valido.

- Requisiti:

    - Definisci $indirizzoRegalo = null;

    - Definisci $indirizzoProfilo = "Via Roma 10, Milano";

    - Crea una variabile $indirizzoFinale.

    - Usa l'operatore ?? per assegnare a $indirizzoFinale il primo valore non nullo seguendo quest'ordine di priorità:

    - Prima controlla $indirizzoRegalo

    - Poi controlla $indirizzoProfilo

- Infine, se sono entrambi null, usa la stringa "Ritiro presso il punto vendita".

- Stampa: "Il pacco sarà spedito a: $indirizzoFinale".

*/

$indirizzoRegalo = null;
$indirizzoProfilo = "Via Bari 10, Napoli";

$indirizzoFinale = $indirizzoDestinazione ?? $indirizzoRegalo;
$indirizzoFinale = $indirizzoDestinazione ?? $indirizzoProfilo;

if($indirizzoRegalo OR $indirizzoProfilo === null) {
    echo "Ritiro presso il punto vendita";
} else {
    echo "Il pacco sarà spedito a: <b>$indirizzoFinale</b>.";
}

# Alternativa validissima!
/*Questa singola riga sostituisce i tuoi if e le tue assegnazioni multiple! */

// $indirizzoFinale = $indirizzoRegalo ?? $indirizzoProfilo ?? "Ritiro presso il punto vendita";
