<?php

/*

📝 Il Formattatore di Prezzi (Funzione con Tipo)
- In PHP moderno, possiamo dire alla funzione che tipo di dati aspettarsi.

- Obiettivo: Creare una funzione che aggiunge il simbolo dell'euro e sistema i decimali.

- Requisiti:

    - Crea una funzione (scegli tu se nominata o anonima) che accetti un numero.

    - La funzione deve trasformare il numero in una stringa che finisce con "€".

    - Bonus: Cerca di fare in modo che se passo 10, il risultato sia 10.00 € (piccolo indizio: cerca la funzione PHP number_format).

    - Stampa il risultato di un prodotto che costa 15.5.

*/

$formatter = function($number = 10) {

    # numero a stringa con €
    $string = strval($number);
    # ritorniamo il numero con la virgola tramite funzione built_in number_format
    return number_format($string, 2, ",") . " €";

};

echo $formatter(15.5); # 15,50€