<?php

/*

📝 Il Generatore di Query (Implode)
- Immagina di voler creare una lista di campi per un database partendo da un array.

- Requisiti:

    - Hai questo array: $campi = ["nome", "cognome", "email", "telefono"];.

    - Usa implode per creare una stringa dove ogni campo è separato da una virgola e uno spazio.

    - Aggiungi all'inizio della stringa la parola "SELECT " e alla fine " FROM utenti".

    - Stampa la stringa finale (Dovrebbe uscire: SELECT nome, cognome, email, telefono FROM utenti).

*/


$campi = ["nome", "cognome", "email", "telefono"];

array_unshift($campi, "SELECT"); # aggiungo all'inzio dell'array
array_push($campi, "FROM utenti"); # aggiungo alla fine dell'array

echo implode(", " , $campi);


# suggerimento
/*
$campi = ["nome", "cognome", "email", "telefono"];
$campi_stringa = implode(", ", $campi);

// Semplicemente così:
echo "SELECT " . $campi_stringa . " FROM utenti <br>";
// Oppure sfruttando le virgolette doppie:
echo "SELECT $campi_stringa FROM utenti";
*/