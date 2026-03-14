<?php

/*

1. Check if a string contains another string

Write a PHP script that checks if a string contains another string.

*/


#semi correct..
/*
$text = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia voluptatum blanditiis eum adipisci, expedita explicabo deserunt pariatur praesentium cupiditate esse, rem dignissimos reprehenderit? Dolorem, reprehenderit id assumenda quae repellendus voluptas.";

if (str_contains($text, "rem")) {
    echo "The string 'rem' was found in the string!";
} else {
    echo "The string 'rem' wasn't found in the string!";
}
*/

# correct one

// Define the regular expression pattern to match 'fox' preceded by a word character and followed by a space
$pattern = '/[^\w]fox\s/';

// Use preg_match function to check if the pattern matches the given string
if (preg_match($pattern, 'The quick brown fox jumps over the lazy dog')) {
    // If 'fox' is found in the string, echo that it is present
    echo "'fox' is present..."."\n";
} else {
    // If 'fox' is not found in the string, echo that it is not present
    echo "'fox' is not present..."."\n";
}


