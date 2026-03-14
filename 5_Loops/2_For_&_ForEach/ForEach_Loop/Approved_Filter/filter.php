<?php

/*

📝 Esercizio 2: Il Filtro Approvazione (Ciclo foreach)
- Spesso negli array abbiamo dati "sporchi" o che non ci servono tutti.

- Requisiti:

    - Crea un array $voti = [18, 25, 12, 30, 15, 28, 10];.

    - Usa un foreach per scorrere i voti.

    - All'interno, usa un if per controllare se il voto è maggiore o uguale a 18.

    - Se lo è, stampa: "Voto $voto: Approvato".

    - Se è minore, stampa: "Voto $voto: Insufficiente".

*/

# array voti
$voti = [18, 25, 12, 30, 15, 28, 10];

foreach($voti as $voto) {
    # se voto è maggiore o uguale... 
    if($voto >= 18) {
        echo "Voto $voto: Approvato.<br>";
    } else {
        echo "Voto $voto: Insufficiente.<br>";
    }
}
