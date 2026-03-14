<?php

/*

📝Leggere un JSON (Decode)
- Immagina che un server ti invii i dati di un utente in questo formato.

- Requisiti:

    - Copia questa stringa: $json_ricevuto = '{"id":1,"prodotto":"Laptop","prezzo":1200}';.

    - Usa json_decode (con il true!) per trasformarla in un array PHP.

    - Stampa una riga che dice: "Il prodotto acquistato è: [prodotto] e costa [prezzo]€".

    - Usa le chiavi dell'array per recuperare i valori.

*/

$json_ricevuto = '{"id":1,"prodotto":"Laptop","prezzo":1200}';

$nuovoJSON = json_decode($json_ricevuto, true); # con true lo trasformo in un array associativo. Omettendo true, diventa un'oggetto.

echo "Il prdotto acquistato è: " . $nuovoJSON["prodotto"] . " e costa " . $nuovoJSON["prezzo"] . " €";