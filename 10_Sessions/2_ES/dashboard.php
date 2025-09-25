<?php

# start a session
session_start();

# verify if the variable exist
if (isset($_SESSION['logged_in']) === true) {
    echo "Welcome to the dashboard. <br><a href='logout.php'>Logout</a>";
} else {
    header('Location:login.php'); # redirect user to the login.php
    exit;
}
