<?php

session_start();

# verify the session and the 'Timer'
if (isset($_SESSION['last_activity']) === true) {
    echo "Session exist.";
} else {
    $_SESSION['last_activity'] = time();
}

if (isset($_SESSION['last_activity']) === true) {
    $_SESSION['last_activity'] = time() - $_SESSION['last_activity'];
} else if ($_SESSION['last_activity'] = time() - $_SESSION['last_activity'] > 10) {
    session_destroy();
    echo "Timeout";
} else if (!"Timeout") {

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 5 - Verifica della Sessione e Timer di Inattività
</title>
</head>
<body>
    <p>After 10 sec this is the message: </p>
    <br>
    <br>
</body>
</html>

<?php

