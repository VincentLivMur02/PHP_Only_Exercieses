<?php

/*

Esercizio 5 - json_encode() semplice:

- Crea un array associativo con le chiavi "nome" e "città".

- Convertilo in JSON usando json_encode() e stampa il risultato.:

------------------

Esercizio 6 - json_encode() con un oggetto:

- Usa la classe Utente creata in precedenza.

- Crea un'istanza e convertila in JSON usando json_encode().

- Stampa il risultato e confrontalo con quello di serialize() dell'esercizio 1.

------------------

Esercizio 7 - json_decode() in oggetto:

Prendi la stringa JSON creata nell'esercizio 6.

Decodificala usando json_decode() con il parametro $associative a false.

Stampa una proprietà dell'oggetto risultante (es. $oggetto->nome).

------------------

Esercizio 8 - json_decode() in array:

- Prendi la stessa stringa JSON dell'esercizio 6.

- Decodificala usando json_decode() con il parametro $associative a true.

- Stampa un valore dell'array risultante (es. $array['nome']).

------------------

Esercizio 9 - Serializzazione con JSON_PRETTY_PRINT:

- Usa l'oggetto Utente e serializzalo in JSON usando json_encode() con il flag JSON_PRETTY_PRINT.

- Spiega nei commenti la differenza visiva nell'output.

-----------------

Esercizio 10 - Riflessione Finale:

- In un commento finale, riassumi in breve quando useresti serialize() e quando json_encode(), basandoti sulla differenza di interoperabilità che abbiamo discusso.

*/

$data = [
    "name" => "Pablo",
    "city" => "New Mexico"
];

class User {
    public $name;
    public $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }
}

# convert $data into JSON file
$jsonConverterData = json_encode($data);
echo "New string JSON: " . $jsonConverterData . "<br>";

echo "<hr>";

$jsonObject = json_decode($associative, false);
echo "Product name (from object): " . $jsonObject->name . "<br>";

echo "<hr>";

$newUser3 = new User("Vincenzo Rosso", "vincenzoRossos@libero.it");
$jsonConverterUser = json_encode($newUser3);
echo "New string JSON, after converted User class: " . $jsonConverterUser . "<br>";
