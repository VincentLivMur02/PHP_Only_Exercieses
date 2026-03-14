<?php

/*

Construct Incremental Star Pattern

Create a script to construct the following pattern, using nested for loop.

*  
* *  
* * *  
* * * *  
* * * * * 

*/

// Outer loop to control the rows
for($x=1;$x<=5;$x++)
{
   // Inner loop to control the columns within each row
   for ($y=1;$y<=$x;$y++)
    {
        // Print a star for each column
	    echo "*";
	    
        // Add a space after each star, except for the last one in the row
	    if($y < $x)
		 {
		   echo " ";
		 }
     }
     
     // Move to the next line after printing each row
     echo "\n";
}



