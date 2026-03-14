<?php

/*

📝 La Traccia: Il Torneo di Coding
Immagina di dover classificare due giocatori in base ai loro punti.

- Requisiti:

    - Hai due variabili: $puntiGiocatore1 = 100; e $puntiGiocatore2 = null;.

    - Passo 1: Assicurati che $puntiGiocatore2 non sia nullo. Se lo è, assegnagli il valore 100 usando l'operatore ??=.

    - Passo 2: Crea una variabile $messaggio. Se esiste un commento dell'arbitro nella variabile $commentoArbitro (che però non abbiamo ancora definito, quindi è null), usa quello. Altrimenti, usa come fallback la stringa "Risultato calcolato". Usa l'operatore ??.

    - Passo 3: Confronta i punti dei due giocatori usando lo spaceship operator (<=>) e salva il risultato in $verdetto.

    - Passo 4: Stampa il $messaggio e poi, usando uno switch su $verdetto, comunica chi ha vinto o se è un pareggio.

*/

# Inizializzazione variabili : 
$puntiGiocatore1 = 100;
$puntiGiocatore2 = null;

# Verficia delle variabili : 
$puntiGiocatore2 ??= 100;

# Creazione nuova variabile assegnango un messaggio :
$messaggio ??= "Risultato calcolato :<br>";

# Confornto punti giocatori:
$confrontoPunti = $puntiGiocatore1 <=> $puntiGiocatore2;

# Stampare il messagio:
echo $messaggio;

# Verdetto finale
switch ($confrontoPunti) {
    case 1:
        echo "Il giocatore1 ha vinto! Ha <b>$puntiGiocatore1</b>.";
        break;
    case -1:
        echo "Il giocatore2 ha vinto! Ha <b>$puntiGiocatore2</b>.";
        break;
    case 0: 
        echo "Pareggio!";
        break;
}

