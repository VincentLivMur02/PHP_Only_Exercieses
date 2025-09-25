<?php

session_start(); # start the session


# check if the form has beeen submitted by via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # If it is a POST request, process the form data
    if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
        $username= htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        $_SESSION['logged_in'] = true;
        header('Location:dashboard.php'); # redirect user to the dashboard.php
        exit; # stop the PHP script immediately
    } else {
        $error_message = "Missing username or password. Please try again.";
    }
} 

# create a form
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 2 - Session_start e Form</title>
</head>
<body>
    <?php
    # Display the error message if there is one
    if (isset($error_message)) {
        echo "<p style='color:red;'>$error_message</p>";
    }
    ?>
    <form action="login.php" method="post">
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