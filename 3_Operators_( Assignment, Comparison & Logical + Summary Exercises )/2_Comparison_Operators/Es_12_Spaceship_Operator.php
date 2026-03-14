<?php

/*

📝 Traccia: Il Filtro Prezzi (Range di Budget)
- Immagina di voler aiutare un utente a capire se il prezzo di un prodotto è Sotto, Dentro o Sopra il suo budget ideale.

- Obiettivo: Confrontare il prezzo di un prodotto con il budget dell'utente.

- Requisiti:

    - Definisci una variabile $prezzoProdotto (es. 50).

    - Definisci una variabile $budgetUtente (es. 50).

    - Usa lo spaceship operator per confrontare $prezzoProdotto con $budgetUtente.

- Gestisci il risultato (-1, 0, 1) per stampare:

Risultato -1: "Affare! Il prezzo è inferiore al tuo budget."

Risultato 0: "Perfetto, costa esattamente quanto volevi spendere."

Risultato 1: "Troppo caro! Il prezzo supera il tuo budget."


La sfida extra (Bonus):
- Invece di usare lo switch, prova a usare il risultato del confronto come indice di un array.

Esempio di logica: Se crei un array $messaggi = [-1 => "Economico", 0 => "Giusto", 1 => "Caro"];, puoi stampare il messaggio direttamente usando $messaggi[$risultato].


*/

$prezzoProdotto = 50888;
$budgetUtente = 505;

$risultato = $prezzoProdotto <=> $budgetUtente;

$arrMessaggi = [
    -1 => "Affare! Il prezzo è inferiore al tuo budget.",
    0 => "Perfetto, costa esattamente quanto volevi spendere.",
    1 => "Troppo caro! Il prezzo supera il tuo budget."
];
echo $arrMessaggi[$risultato];