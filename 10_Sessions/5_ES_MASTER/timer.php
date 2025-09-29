<?php

session_start();

$timeout_seconds = 10; // Sets the inactivity limit in seconds
$current_time = time(); // Gets the current timestamp

// 1. Initialisation: If the timer does not exist, set it up.
if (!isset($_SESSION['last_activity']) === true) {
    $_SESSION['last_activity']  = $current_time;
    $message = "Welcome! Timer started. You have $timeout_seconds seconds of inactivity.";
} else {
    // 2. Check: If the timer exists, calculate and compare
    // Calculate the time elapsed since the last activity
    $time_elapsed = $current_time - $_SESSION['last_activity'];
    
    // Comparison: If the elapsed time is greater than the limit
    if ($time_elapsed > $timeout_seconds) {
        
        // Timeout logic: Destroy the session
        session_unset();
        session_destroy();
        $message = "<h1>TIMEOUT!</h1><p style='color:red;'>The session has expired after " . $time_elapsed . " seconds of inactivity.</p>";
        $link = "<p>Reload the page to start a new session.</p>";
        
    } else {
        // Activity logic: Update the timer
        $_SESSION['last_activity'] = $current_time;
        
        $message = "Welcome! Timer updated. <br>Time elapsed since last activity: " . $time_elapsed . " seconds (Limit: $timeout_seconds seconds).";
        $link = "<p>Wait a moment or reload the page to test the timeout.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 5 - Verifica della Sessione e Timer di Inattività</title>
</head>
<body>
    <?php echo $message; ?>
    <?php echo $link ?? ""; ?>
</body>
</html>