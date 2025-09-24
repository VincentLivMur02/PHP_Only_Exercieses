<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['confirm_password']) && !empty($_POST['confirm_password'])) {

    # use the htmlspecialchars() to verify variables and print...
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm_password']);

    if ($password === $confirm_password){
        echo "Registration success!";
    } else {
        echo "Registration failed. The passwords don't match. Please try again.";
    }
    }
}

// dubbi... perchè quando le credenziali non sono inserite non mi appare più un form?