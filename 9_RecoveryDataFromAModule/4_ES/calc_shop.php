<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['price']) && !empty($_GET['price']) && isset($_GET['quantity']) && !empty($_GET['quantity'])) {
        $price = htmlspecialchars($_GET['price']);
        $quantity = htmlspecialchars($_GET['quantity']);
        
        if (is_numeric($price) && is_numeric($quantity)) {
            echo "This is the result: " . $price * $quantity;
        } else {
            echo "Operation failed. Please try again.";
        }
    }
} else {
    echo "
    <form action='calc_shop.php' method='get'>
        <label for='price'> Price : </label>
        <input type='text' name='price'>
        <br>
        <br>
        <label for='quantity'> Quantity : </label>
        <input type='text' name='quantity'>
        <br>
        <br>
        <button type='submit'>Send</button>
    </form>
    ";
}