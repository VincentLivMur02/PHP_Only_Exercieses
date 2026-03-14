<?php   

/*

📝 Traccia: Il Setup delle Preferenze
Obiettivo: Inizializzare le opzioni mancanti di un array senza sovrascrivere quelle già presenti.

- Requisiti:

    - Crea un array $profilo con queste chiavi:

        - 'nome' => "Luca"

        - 'tema' => null

        - 'lingua' => null

    - Usa l'operatore ??= per assegnare:

        - Al 'tema' il valore "Scuro".

        - Alla 'lingua' il valore "Italiano".

        - Al 'nome' il valore "Anonimo".

- Stampa l'array con print_r($profilo).

*/

$profilo = [
    "nome" => "Luca",
    "tema" => null,
    "lingua" => null
];

$profilo["nome"] ??= "Anonimo";
$profilo["tema"] ??= "Scuro";
$profilo["lingua"] ??= "Italiano";


print_r($profilo);