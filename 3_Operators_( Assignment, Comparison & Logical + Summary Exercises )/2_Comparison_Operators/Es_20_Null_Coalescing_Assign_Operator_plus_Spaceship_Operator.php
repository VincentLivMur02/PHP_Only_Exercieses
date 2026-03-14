<?php

/*

📝 Traccia: Il Crossover (Sconti Fedeltà)
- Obiettivo: Gestire un punteggio utente, assicurarsi che ci sia un valore di confronto e decidere il premio.

- Requisiti:

    - Definisci $puntiUtente = 500;

    - Definisci $sogliaPremio = null; (Simuliamo un dato mancante).

    - Usa ??=: Se $sogliaPremio è null, assegnale il valore 500.

    - Usa <=>: Confronta $puntiUtente con $sogliaPremio e salva il risultato in $risultato.

- Usa switch:

    - case 0: Stampa "Hai raggiunto esattamente la soglia! Ecco il tuo premio standard."

    - case 1: Stampa "Super complimenti! Hai superato la soglia, premio VIP per te!"

    - case -1: Stampa "Ti mancano ancora dei punti per il premio."

*/

# $puntiUtente = 450;
# $puntiUtente = 600;
$puntiUtente = 500;
$sogliaPremio = null;

# assegnazione del ??= su $sogliaPremio
$sogliaPremio ??= 500;

# confronto:
$risultato = $puntiUtente <=> $sogliaPremio;

# switch:
switch ($risultato) {
    case 0:
        echo "Hai raggiunto esattamente la soglia! Ecco il tuo premio standard.";
        break;
    case 1:
        echo "Super complimenti! Hai superato la soglia, premio VIP per te!";
        break;
    case -1:
        echo "Ti mancano ancora dei punti per il premio.";
        break;
}

