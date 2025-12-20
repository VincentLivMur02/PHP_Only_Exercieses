<?

$host = 'db'; // Nome servizio Docker
$db   = 'libreria';
$user = 'root';
$pass = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query per prendere l'utente che abbiamo appena creato
    /*
    $stmt = $pdo->query("SELECT nome, cognome FROM utenti LIMIT 1");
    $utente = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($utente) {
        echo "<h1>Connessione Riuscita!</h1>";
        echo " Benvenuto nel database, <strong>" . $utente['nome'] . " " . $utente['cognome'] . "</strong>!";
    } else {
        echo "Connesso, ma non ho trovato utenti nel database.";
    }*/

    // Query per prendere l'utente
    $stmtUtente = $pdo->query("SELECT nome, cognome FROM utenti LIMIT 1");
    $utente = $stmtUtente->fetch(PDO::FETCH_ASSOC);

    // Query per prendere il libro
    $stmtLibro = $pdo->query("SELECT titolo, autore FROM libri LIMIT 1");
    $libro = $stmtLibro->fetch(PDO::FETCH_ASSOC);

    if ($utente) {
        echo "<h1>Connessione Riuscita!</h1>";
        echo "<p>Benvenuto, <strong>" . $utente['nome'] . " " . $utente['cognome'] . "</strong>!</p>";
    
        if ($libro) {
        echo "<p>Il primo libro in libreria è: <em>" . $libro['titolo'] . "</em> di " . $libro['autore'] . ".</p>";
        }
    }
   
} catch (PDOException $e) {
    echo "Errore: " . $e->getMessage();
}

echo "Helllloooo";
?>