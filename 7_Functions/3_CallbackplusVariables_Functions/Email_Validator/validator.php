<?php

/*

📝 Il Validatore di Email (Callback)
- Le funzioni possono essere passate come "istruzioni" ad altre funzioni.

- Obiettivo: Filtrare una lista di email e tenere solo quelle valide (che contengono una "@").

- Requisiti:

    - Hai questo array: $lista = ["luca@gmail.com", "info.it", "mario@outlook.it", "test-email"];.

    - Usa la funzione predefinita di PHP array_filter.

    - array_filter vuole come secondo parametro una funzione anonima (la callback).

    - All'interno della tua funzione anonima, scrivi la logica per restituire true se l'email contiene "@", altrimenti false (usa str_contains($email, '@')).

    - Stampa l'array risultante con print_r.

*/

# sbagliato
/*
$lista = ["giovanni@gmail.com", "info.it", "Bergomi@outlook.it", "test-file.sass"];

# funzione anonima 
$passValida = function() {
    # verifica delle mail dentro l'array
    str_contains($lista, "@") ? "La @ c'è, è una mail" : "Non è una mail";
};

print_r(array_filter($lista)); 
*/


# corretto
$lista = ["luca@gmail.com", "info.it", "mario@outlook.it"];

// array_filter prende l'array e una funzione che analizza OGNI elemento ($email)
$filtrate = array_filter($lista, function($email) {
    // Deve restituire solo true o false
    return str_contains($email, "@"); 
});

print_r($filtrate); 