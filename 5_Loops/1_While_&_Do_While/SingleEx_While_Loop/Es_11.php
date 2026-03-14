<?php

/*

📝 Proviamo la Traccia 2: Il Ciclo while (Classico)
Ora che hai visto come "forzare" un'azione almeno una volta, proviamo il while standard, dove la condizione viene controllata subito.

- Obiettivo: Simulare il download di un file pesante.

- Requisiti:

    - Crea una variabile $percentuale = 0;.

    - Usa un ciclo while che continui finché $percentuale è minore o uguale a 100.

- All'interno del ciclo:

    - Stampa: "Download in corso... $percentuale%".

    - Aumenta la percentuale di 20 ad ogni giro (usa l'operatore $percentuale += 20;).

    - Fuori dal ciclo stampa: "Download completato!".

*/

$percentuale = 0;

while ($percentuale <= 100) {
    echo "Download in corso... <b>$percentuale%</b>";
    $percentuale+=20;
}

echo "Download completato!";