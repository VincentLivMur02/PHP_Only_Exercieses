<?php


session_start(); # start the session

session_unset($_SESSION['logged_in']); # remove all session variables 'logged_in'

session_destroy($_SESSION['logged_in']); # destroy all data registered to a session

echo header('Location:dashboard.php') . "Session destroied. You've logged out.<br>
<a href='login.php'>Login</a>";