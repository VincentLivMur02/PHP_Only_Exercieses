<?php

# session start
session_start();

# check if the form has beeen submitted by via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # If it is a POST request, process the form data
    if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
        $username= htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        $_SESSION['flash_message'] = "Message sent successfully";
        header('Location:success.php'); # redirect user to the success.php
        exit; # stop the PHP script immediately
    } else {
        $error_message = "Missing username or password. Please try again.";
    }
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 4 - Messaggio Flash (Feedback)</title>
</head>
<body>
    <?php
    # Display the error message if there is one
    if (isset($error_message)) {
        echo "<p style='color:red;'>$error_message</p>";
    }
    ?>
    <form action="sent_form.php" method="post">
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
