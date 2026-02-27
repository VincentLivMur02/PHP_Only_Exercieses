<?php

/*

4. Difference Between Two Dates

Write a PHP script to calculate the difference between two dates.
Sample dates : 1981-11-04, 2013-09-04
Expected Result : 31 years, 10 months, 11 days

*/

// Start date
$sdate = "1981-11-02";
// End date
$edate = "2026-09-02";

// Calculate the difference between the end date and the start date in seconds
$date_diff = abs(strtotime($edate) - strtotime($sdate));

// Calculate the number of years in the difference
$years = floor($date_diff / (365*60*60*24));
// Calculate the number of months in the remaining difference
$months = floor(($date_diff - $years * 365*60*60*24) / (30*60*60*24));
// Calculate the number of days in the remaining difference
$days = floor(($date_diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

// Output the calculated duration
printf("%d years, %d months, %d days", $years, $months, $days);
// Print a newline character for formatting
printf("\n");

