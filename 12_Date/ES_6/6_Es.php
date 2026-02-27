<?php
/*

6. Convert Date to Timestamp

Write a PHP script to convert the date to timestamp.
Sample date : 12-05-2014
Expected Result : 1399852800

*/

# Incorrect

# $sampleDate = date("d-m-Y");
# echo time();

# ----------------------------

# Correct Answere

// Convert the date string '12-05-2014' to a Unix timestamp
$timestamp = strtotime('27-02-2026');
// Print the Unix timestamp
echo $timestamp."\n";




