<?php   


/*
📝 Closure e la parola chiave : use

- Situazione: Hai una commissione fissa di spedizione (es. 5€) che è definita fuori dalla funzione.

- Requisiti:

    - Definisci una variabile esterna $costoSpedizione = 5;.

    - Crea una funzione anonima $calcolaTotale che accetta un parametro $prezzoProdotto.

    - Usa la parola chiave use ($costoSpedizione) per permettere alla funzione di leggere quella variabile.

    - Logica: Somma il prezzo del prodotto al costo di spedizione.

    - Esecuzione: Chiama la funzione passandole 50 e stampa il risultato (dovrebbe uscire 55).

*/

# var esterna
$costoSpedizione = 5;

# closuere con keyword use per utilizzo di altra variabile
$calcolaTotale = function($prezzoProdotto) use ($costoSpedizione) {
    $somma = $prezzoProdotto + $costoSpedizione;
    return $somma;
};

echo $calcolaTotale(50); # 55