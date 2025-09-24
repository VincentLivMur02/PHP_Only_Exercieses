<?php

/*

Esercizio 1 - Serializzazione Semplice:

- Crea una classe Utente con proprietà public $nome e $email.

- Crea un'istanza di Utente e serializzala usando serialize().

- Stampa la stringa serializzata e deserializzala con unserialize().

- Stampa il nome dell'utente dall'oggetto deserializzato per verificare il successo.

--------------------

Esercizio 2 - __sleep():

- Modifica la classe Utente aggiungendo un metodo magico __sleep().

- All'interno di __sleep(), restituisci un array che includa solo la proprietà nome.

- Serializza l'oggetto e stampa la stringa. Spiega perché la proprietà email non è presente.

-------------------

Esercizio 3 - __wakeup():

- Modifica la classe Utente aggiungendo una proprietà public $connesso = false.

- Implementa il metodo __sleep() per salvare solo nome ed email.

- Implementa il metodo __wakeup() che imposti la proprietà $connesso a true (simulando una riconnessione).

- Serializza, deserializza e stampa il valore di $connesso prima e dopo la deserializzazione.

*/

class User {
    public $name;
    public $email;
    public $connected = false;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
        echo "User object created: $this->name<br>";
    }

    // Called before serialisation
    public function __sleep() {
        echo "__sleep() called. Only serialising name and email.<br>";
        // Returns an array with the names of the properties to be serialised
        return ['name', 'email'];
    }

    // Called after deserialisation
    public function __wakeup() {
        $this->connected = true; // Simulates a reconnection
        echo "__wakeup() called. User now connected.<br>";
    }
}




// Exercise 1: Simple serialisation
echo "<h3>Exercise 1: Basic test</h3>";
$originalUser = new User("Marco Bianchi", "marco@email.it");
$serializedString = serialize($originalUser);
echo "Serialized string: " . $serializedString . "<br>";
$deserializedUser = unserialize($serializedString);
echo "Deserialized user: " . $deserializedUser->name . " and " . $deserializedUser->email . "<br>";
echo "<hr>";

// Exercise 2: Testing with __sleep()
echo "<h3>Exercise 2: Testing with __sleep()</h3>";
// The output of serialize() will only show the “name” and “email” properties
$serializedString2 = serialize($originalUser);
echo "Serialised String (with __sleep()): " . $serializedString2 . "<br>";
echo "<p>Explanation: `__sleep()` only returned the array ['name', 'email']. The `connected` property was not serialised.</p>";
echo "<hr>";

// Exercise 3: Test with __wakeup()
echo "<h3>Exercise 3: Test with __wakeup()</h3>";
echo "Status before serialization: Connected = " . ($originalUser->connected ? "true" : "false") . "<br>";
$string = serialize($originalUser); // __sleep() called here
$deserializedUser2 = unserialize($string); // __wakeup() called here
echo "Status after deserialization: Connected = " . ($deserializedUser2->connected ? "true" : "false") . "<br>";
echo "<hr>";