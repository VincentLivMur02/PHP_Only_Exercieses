<?php

/*

Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. 

There will be no hyphen(-) at starting and ending position. 

*/

# wrong answere
/*
for ($i = 0; $i <= 10; $i++ ) {
    // if ($i == 10) break;
    echo "-" . $i;
};
*/


# correct
// Loop through numbers from 1 to 10
for($i=1; $i<=10; $i++)
{
    // Check if number is less than 10
    if($i < 10)
    {
        // Print number with a dash if less than 10
        echo "$i-";
    }
    else
    {
        // Print number followed by a newline if it's 10
        echo "$i"."\n";
    }
}

