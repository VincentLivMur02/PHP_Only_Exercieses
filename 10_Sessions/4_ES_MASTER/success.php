<?php

session_start();

# verify if the variable exist
if(isset($_SESSION['flash_message']) === true){

    # 1. Print the message
    echo "<h1>Flash Message Received!</h1>";
    echo "<p style='color:green; font-weight:bold;'>" . htmlspecialchars($_SESSION['flash_message']) . "</p>";

    unset($_SESSION['flash_message']); # immediatly after, delete the session variable. This, ensure that the message doesn't reappear if the user refreshes the page.

    echo "<a href='sent_form.php'>Back to Form</a>";
} else {
    # If there is no flash message, redirect the user to the form.
    echo "No message found. Redirecting...";
    
    # CORRECTION: Redirect to the submission form
    header('Location: sent_form.php'); 
    exit;
}