<?php

/*

📝 La "Pulizia" dei dati (Explode + Array)
- Spesso i dati arrivano da file esterni separati da simboli "strani", come il pipe |.

- Requisiti:

    - Hai questa stringa: $riga_utente = "101|MarioRossi|mario@example.com|Roma";.

    - Usa explode per separare i dati usando il simbolo |.

    - Stampa solo l'email dell'utente (che si trova all'indice 2 dell'array generato).

    - Stampa la città dell'utente (indice 3).

*/

$riga_utente = "101|MarioRossi|mario@example.com|Roma";

$nuovaRiga_Utente = explode("|", $riga_utente);

print_r($riga_utente);
echo "<br>";
print_r($nuovaRiga_Utente[2]); # email
echo "<br>";
print_r($nuovaRiga_Utente[3]); # città 

