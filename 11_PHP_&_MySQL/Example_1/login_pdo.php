<?php
// Attiva l'Output Buffering per gestire gli header
ob_start();
session_start();

// --- CONFIGURAZIONE E SIMULAZIONE DB ---
// In un'applicazione reale, qui ci sarebbe la connessione PDO
// $pdo = new PDO(...)

// Simulazione di una password hashata (OBBLIGATORIO: MAI salvare le password in chiaro!)
$PASSWORD_HASHATA = password_hash('segreta123', PASSWORD_DEFAULT);
$UTENTI_SIMULATI = [
    'admin' => $PASSWORD_HASHATA,
    'ospite' => password_hash('benvenuto', PASSWORD_DEFAULT)
];

$feedback_message = "";

// --- GESTIONE LOGOUT ---
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_unset();
    session_destroy();
    header('Location: login_pdo.php');
    exit;
}

// --- GESTIONE LOGIN ---
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password_inserita = $_POST['password'] ?? '';

    if (empty($username) || empty($password_inserita)) {
        $feedback_message = "<p style='color:red;'>Inserisci username e password.</p>";
    } else {
        // --- 1. SIMULAZIONE PREPARE & BIND (La parte cruciale per la sicurezza!) ---
        
        // In un contesto reale PDO: $stmt = $pdo->prepare("SELECT password FROM users WHERE username = :user");
        // Eseguiremmo il bind e l'execute qui.
        
        // Per la simulazione, ricerchiamo l'utente nel nostro array simulato:
        if (isset($UTENTI_SIMULATI[$username])) {
            $hash_nel_db = $UTENTI_SIMULATI[$username];

            // --- 2. VERIFICA SICURA DELLA PASSWORD ---
            if (password_verify($password_inserita, $hash_nel_db)) {
                // Successo: Avvio la sessione
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $username;
                $feedback_message = "<p style='color:green;'>Login riuscito! Redirect in corso...</p>";
                
                // Reindirizzamento
                header('Location: login_pdo.php'); // Ricarico per evitare re-submission
                exit;
            } else {
                // Errore: Password non corrisponde
                $feedback_message = "<p style='color:red;'>Credenziali non valide.</p>";
            }
        } else {
            // Errore: Utente non trovato (Sicurezza: usa lo stesso messaggio dell'errore password)
            $feedback_message = "<p style='color:red;'>Credenziali non valide.</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Login Sicuro (PDO Logic)</title>
</head>
<body>

<?php if (isset($_SESSION['logged_in'])): ?>
    
    <h1>BENVENUTO, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <p>Sei loggato. Questo è l'equivalente della tua Dashboard.</p>
    <p><a href="?action=logout">Logout</a></p>

<?php else: ?>

    <h1>Accedi al Sistema (Simulazione PDO Secure)</h1>
    
    <?php echo $feedback_message; ?>

    <form method="POST" action="login_pdo.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <button type="submit">Accedi</button>
    </form>
    
    <hr>
    <p>Credenziali di Test (solo per l'esercizio):</p>
    <ul>
        <li>Username: **admin**</li>
        <li>Password: **segreta123**</li>
    </ul>

<?php endif; ?>

</body>
</html>
<?php ob_end_flush(); ?>