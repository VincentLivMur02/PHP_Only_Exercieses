<?php


/*

Esercizio 6:

- Crea un'interfaccia DatabaseInterface con i metodi connetti(), disconnetti() e eseguiQuery($query).

------------

Esercizio 7:

- Crea una classe MySQL che implements DatabaseInterface. 
- Implementa i tre metodi con dei semplici echo per simulare le azioni.

------------

Esercizio 8:

- Crea una classe PostgreSQL che implements DatabaseInterface. 
- Implementa i tre metodi con dei semplici echo che indicano che stai usando PostgreSQL.

------------ 

Esercizio 9:

- Crea una funzione connettiDB() che accetti un parametro di tipo DatabaseInterface. 
- All'interno, chiama i metodi connetti() ed eseguiQuery() con una query di esempio.

------------

Esercizio 10:

- Crea un'istanza di MySQL e una di PostgreSQL. 
- Passa entrambe alla funzione connettiDB() per dimostrare come le interfacce garantiscano la flessibilità
*/


# creation of an interface
interface DatabaseInterface {
    # methods
    public function connect();
    public function disconnect();
    public function executeQuery($query);
}


class MySQL implements DatabaseInterface {
    # methods
    public function connect() {
        echo "You'r connect to Db MySQL!<br>";
    }
    public function disconnect() {
        echo "You'r disconnected to Db MySQL.<br>";
    }
    public function executeQuery($query) {
        echo "The query " . $query . " is running!<br>";
    }
}


class PostgreSQL implements DatabaseInterface {
    # methods
    public function connect() {
        echo "You'r connect to Db PostgreSQL!<br>";
    }
    public function disconnect() {
        echo "You'r disconnected to Db PostgreSQL.<br>";
    }
    public function executeQuery($query) {
        echo "The query " . $query . " is running!<br>";
    }
}

# function connecttoDb
function connectToDb(DatabaseInterface $databaseInterface) {
    $databaseInterface->connect();
    $databaseInterface->executeQuery("SELECT * FROM users");
}

# instance
$newMySQLDb = new MySQL();
$newMyPostgreSQLDb = new PostgreSQL();

connectToDb($newMySQLDb);
echo "<br>";
connectToDb($newMyPostgreSQLDb);