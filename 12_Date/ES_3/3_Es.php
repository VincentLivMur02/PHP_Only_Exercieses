<?php

/*

3. Current Date Formatting

Write a PHP script to print the current date in the following format. To get current date's information you can use the date() function.

Sample format : (assume current date is September 01, 2013)
2013/09/01
13.09.01
01-09-13

*/

echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("y.m.d") . "<br>";
echo "Today is " . date("d-m-y") . "<br>";

