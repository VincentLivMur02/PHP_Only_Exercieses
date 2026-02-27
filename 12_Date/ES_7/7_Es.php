<?php

/*

7. Calculate Days Between Two Dates

Write a PHP script to calculate a number of days between two dates.

*/

$to_date = time(); // Current date and time in Unix timestamp format

$from_date = strtotime("2025-02-02"); // Convert the specified date string to a Unix timestamp

$day_diff = $to_date - $from_date; // Calculate the difference in seconds between the two timestamps

echo floor($day_diff/(60*60*24))."\n"; // Convert the difference to days and print it

