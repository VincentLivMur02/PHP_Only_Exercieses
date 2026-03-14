<?php   

/*

Sum Integers 0 to 30

Create a script using a for loop to add all the integers between 0 and 30 and display the total.

*/

# wrong answere
/*
for ($i = 0; $i <= 30; $i += 1) {
    if($i < 30){
        // Print number with a dash if less than 10
        echo "$i-";
    } else {
        // Print number followed by a newline if it's 10
        echo "$i"."\n";
    }
}
*/

# correct
// Initialize sum variable
$sum = 0;

// Loop through numbers from 1 to 30
for($x=1; $x<=30; $x++)
{
    // Add current number to the sum
    $sum += $x;
}

// Print the sum of numbers from 1 to 30
echo "The sum of the numbers 0 to 30 is $sum"."\n";


    
        

