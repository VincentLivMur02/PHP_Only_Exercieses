<?php


session_start(); # start the session

session_unset(); # remove all session variables 

session_destroy(); # destroy all data registered to a session

header('Location:dashboard.php'); // Redirects the user to the login page
exit; // IMMEDIATELY STOPS the script

// Nothing will be printed after the header!
