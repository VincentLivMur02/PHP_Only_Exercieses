<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['confirm_password']) && !empty($_POST['confirm_password'])) {

    # use the htmlspecialchars() to verify variables and print...
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm_password']);
        # Check if the passwords match
        if ($password === $confirm_password){
            echo "Registration success!";
        } else {
            echo "Registration failed. The passwords don't match. Please try again.";
        }

    } else {
        echo "Error: Missing data! Please fill in all fields.";
    }
} else {
    // If the request is NOT POST, it is direct access.
    // So we redirect the user to the HTML form.
    // header(“Location: advanced_registration.html”);
    echo "Error: Direct access to this file is not allowed. Please use the registration form.";
}

