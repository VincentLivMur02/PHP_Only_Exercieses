<?php

/*

📝 Traccia 3: Il Ciclo for (La Tabellina)
- Passiamo al ciclo più amato per le operazioni matematiche e i conteggi definiti: il ciclo for.

- Obiettivo: Creare la tabellina di un numero a tua scelta (es. il 5).

- Requisiti:

    - Scegli un numero e salvalo in una variabile $numeroBase.

    - Usa un ciclo for che parta da 1 e arrivi fino a 10.

    - All'interno del ciclo:

    - Calcola il risultato (es. $numeroBase * $i).

    - Stampa la riga dell'operazione, ad esempio: "5 x 1 = 5".

    - Fuori dal ciclo stampa: "Tabellina completata!".

*/

$numeroBase = 5;

for ($i = 1; $i <= 10; $i++) {
    # calcolare il rislutato
    $result = $numeroBase * $i;
    echo "$numeroBase x $i = $result<br>";
};

echo "Tabellina completata!";