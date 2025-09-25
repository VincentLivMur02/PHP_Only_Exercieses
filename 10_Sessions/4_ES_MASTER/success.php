<?php

session_start();

# verify if the variable exist
if(isset($_SESSION['flash_message']) === true){
    echo "Hello User!";
    unset($_SESSION['flash_message']); # immediatly after, delete the session variable. This, ensure that the message doesn't reappear if the user refreshes the page.
} else {
    echo "You're welcome!";
    header('Location:success.php'); # redirect user to sent_form.php
    exit;
}