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

class User {
    public $name;
    public $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }
}

echo "<h3>Exercise 5</h3>";
$data = ["name" => "Pablo", "city" => "New Mexico"];
$json = json_encode($data);
echo "JSON from array: " . $json . "<br>";
echo "<hr>";

echo "<h3>Exercise 6</h3>";
$userJson = new User("Vincenzo Rosso", "vincenzo.rosso@libero.it");
$jsonUser = json_encode($userJson);
echo "JSON from object: " . $jsonUser . "<br>";
echo "<hr>";

echo "<h3>Exercise 7</h3>";
$decodedObject = json_decode($jsonUser);
echo "Name from decoded object: " . $decodedObject->name . "<br>";
echo "<hr>";

echo "<h3>Exercise 8</h3>";
$decodedArray = json_decode($jsonUser, true);
echo "Name from the decoded array: " . $decodedArray["name"] . "<br>";
echo "<hr>";

echo "<h3>Exercise 9</h3>";
$jsonPretty = json_encode($userJson, JSON_PRETTY_PRINT);
echo "Formatted JSON:<br>";
echo "<pre>" . $jsonPretty . "</pre>";
echo "<p>Explanation: The <b>JSON_PRETTY_PRINT</b> flag formats JSON with indentation and new lines, making it more readable.</p>";
echo "<hr>";

// Exercise 10: Final Reflection
/* 
La serializzazione con serialize() è utile per salvare e ripristinare dati tra processi PHP, mantenendo le informazioni sulla classe. La serializzazione con json_encode() è il formato preferito per la comunicazione tra sistemi diversi (API, JavaScript) perché è universale e leggibile da tutti i linguaggi di programmazione.
*/

?>
