<?php 

/* 
1. Copyright Info Display
Write a PHP script which will display the copyright information in the following format. To get current year you can use the date() function.

Expected Format : © 2013 PHP Exercises 
*/

echo "Expected Format : © " . date("Y") . " PHP Exercises <br>";

/* Alternative expression */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Date/Es_1/Copyright Info Display </title>
</head>
<body>
    <p>© <?php echo date("Y"); ?> PHP Exercises </p>
</body>
</html>