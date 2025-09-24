<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username= htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        echo "Welcome!"; # retrun all of data
    }
} else {
    if ( $_SERVER['REQUEST_METHOD'] != 'POST') {
       echo "
        <form action='register.php' method='post'>
            <label for='username'>Username:</label>
            <input type='text' name='username'>
            <br>
            <br>
            <label for='password'>Password:</label>
            <input type='password' name='password'>
            <br>
            <br>
            <button type='submit'>Submit</button>
        </form>
    ";
    }
}

// dubbi...
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 3 - Registrazione Utente (con $_POST e REQUEST_METHOD)</title>
</head>
<body>
    <form action="register.php" method="get">
        <label for="username">Username:</label>
        <input type="text" name="username">
        <br>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password">
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
