<?php
# Check if the form has been submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # If it is a POST request, process the form data
    if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
        $username= htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        echo "Welcome, " . $username . "! Your registration has been processed.";
    } else {
        echo "Missing username or password.";
    }
} else {
    // If it's a GET request (first page load), show the form
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Esercizio 3 - Registrazione Utente (con $_POST e REQUEST_METHOD)</title>
    </head>
    <body>
        <form action="register.php" method="post">
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
   <?php
}



