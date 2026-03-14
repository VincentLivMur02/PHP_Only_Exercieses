<?php

/*

8. First and Last Day of Month

Write a PHP script to get the first and last day of a month from a specified date.

*/

$dt = "2008-02-23"; // Define the date string

echo 'First day : '. date("Y-m-01", strtotime($dt)).' - Last day : '. date("Y-m-t", strtotime($dt));  

