<?php

/*

5. Date Format Conversion (yyyy-mm-dd to dd-mm-yyyy)

Write a PHP script to convert a date from yyyy-mm-dd to dd-mm-yyyy.
Sample date : 2012-09-12
Expected Result : 12-09-2012

*/

echo "Original date : " . date("Y-m-d") . "<br>";
echo "New format date : " . date("d-m-Y") . "<br>";

echo "<br>";
echo "<br>";

# different format 

// Original date in yyyy-mm-dd format
$odate = "2026-02-27";

// Converting the original date to a new format (dd-mm-yyyy)
$newDate = date("d-m-Y", strtotime($odate));

// Displaying the new formatted date
echo $newDate."\n";

