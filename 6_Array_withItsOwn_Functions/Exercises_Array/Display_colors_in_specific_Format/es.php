<?php

/*

2. Display Colors in Specific Format

$color = array('white', 'green', 'red')
Write a PHP script which will display the colors in the following way :
Output :
white, green, red,

green
red
white

*/

# wrong answere
/*
$color = array('white', 'green', 'red');
$rev_Arr_Order = array_reverse($color);

print_r($color);
print_r($rev_Arr_Order);
*/

# correct one
// Define an array of colors
$color = array('white', 'green', 'red');

// Iterate through each color in the array and echo them with a comma separator
foreach ($color as $c) {
    echo "$c, ";
}

// Sort the colors alphabetically
sort($color);

// Echo the start of an unordered list
echo "<ul>";

// Iterate through each color in the sorted array and echo them as list items
foreach ($color as $y) {
    echo "<li>$y</li>";
}

// Echo the end of the unordered list
echo "</ul>";


