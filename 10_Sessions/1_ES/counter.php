<?php

# start the session
session_start();

# verify if the variable exist
if (isset($_SESSION['visits'])) {
    $_SESSION['visits'] = $_SESSION['visits'] + 1;
} else {
    $_SESSION['visits'] = 1;
}

echo "You have visited this page " . $_SESSION['visits'] . " times <br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 1 - Contatore di pagine</title>
</head>
<body>
    <button><a href="counter.php">Premi</a></button>
</body>
</html>
<?php
?>
