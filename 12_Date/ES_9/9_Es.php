<?php


/*

9. Display Date in "Saturday the 7th" Format

Write a PHP script to print like : Saturday the 7th.

*/


# wrong answere
// $dt = "03-07-2026";

// echo "This date $dt ll'be Saturday the 7th.";

# correct one
echo date('l \t\h\e jS'); // Outputs the current day of the week followed by the day of the month with the suffix.

/*

date('l \t\h\e jS'): Formats the current date and time according to the provided format string.

l: Represents the full name of the day of the week (e.g., Monday, Tuesday, etc.).

\t\h\e: Outputs the literal text "the" as part of the string.

jS: Represents the day of the month with the suffix (e.g., 1st, 2nd, 3rd, etc.).

echo: Outputs the formatted date string to the screen.

*/