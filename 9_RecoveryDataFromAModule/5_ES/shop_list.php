<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') { # verify the method
    if (isset($_POST['articles']) && !empty($_POST['articles']) && is_array($_POST['articles'])) { # we use 'is_array( )' to verify if the variables are an array
        # print ul tag
        echo "<h3>The articles are :</h3>";
        echo "<ul>"; 
        foreach ($_POST['articles'] as $article) {
            echo "<li>" . htmlspecialchars($article) . "</li>";
        } # foreach found article, return an li tag whit the same article
        echo "</ul>";
    } else {
        echo "No articles selected. Please try again.";
    }
} else { # retrun the same form
    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Esercizio 4 - Calcolatore di Spesa</title>
        </head>
        <body>
            <form action="shop_list.php" method="post">
                <input type="checkbox" name="articles[]">
                <label for="bread"> Bread </label>
                <br>
                <input type="checkbox" name="articles[]">
                <label for="eggs"> Eggs </label>
                <br>
                <input type="checkbox" name="articles[]">
                <label for="milk"> Milk </label>
                <br>
                <br>
                <button type='submit'>Submit</button>
            </form>
        </body>
        </html>
    <?php
}

// dubbi... perchè compare "on" anzichè i miei item principali?
