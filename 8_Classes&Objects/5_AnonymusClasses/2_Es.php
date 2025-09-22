<?php
/*

Esercizio 3:

- Crea un'interfaccia chiamata Archiviatore con un metodo salva($dati).
- Crea una funzione elaboraDati(Archiviatore $archiviatore) che riceva come parametro un oggetto di tipo Archiviatore e chiami il suo metodo salva().
- Passa a questa funzione una classe anonima che implementi l'interfaccia Archiviatore e che stampi un messaggio come "Dati salvati in un database."

*/

# interface 
interface Archiviator{
    public function saveData($data);
}

function processData(Archiviator $archiviator) {
    $archiviator->saveData($data);
}

# new anonymus class which implements Archiviator
$newMessage = new class implements Archiviator {
    public function saveData($data) {
        echo "Data saved in new DataBase."; # ovveride 
    }
};

processData($newMessage);

// dubbi... 