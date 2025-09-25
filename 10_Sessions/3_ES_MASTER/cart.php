<?php
    # start session
    session_start();

    # if session['cart'] doesn't exist, inizialise the array
    if (isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    # check if the form has beeen submitted by via POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    # If it is a POST request, process the form data
    if (isset($_POST['product']) && !empty($_POST['product'])) {
        $product = htmlspecialchars($_POST['product']);
        $_SESSION['cart'] = [$product]; # add $products into the array
        # print ul tag
        echo "<h3>The articles are :</h3>";
        echo "<ul>"; 
        foreach ($_POST['product'] as $product) {
                echo "<li>" . htmlspecialchars($product) . "</li>";
        } # foreach found article, return an li tag whit the same article
        echo "</ul>";
        header('Location:cart.php'); # redirect user to the cart.php
        exit; # stop the PHP script immediately
    } else {
        $error_message = "No products into the cart.";
    }
    } 
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Esercizio 3 - Carrello della Spesa Semplice</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <?php
        # Display the error message if there is one
        if (isset($error_message)) {
            echo "<p style='color:red;'>$error_message</p>";
        }
        ?>
        <form action="cart.php" method="get">
            <label for="product">Product:</label>
            <input type="text" name="product">
            <br>
            <br>
            <button type="submit">Add to Cart <i class="fa-solid fa-cart-shopping"></i></button>
        </form>
    </body>
    </html>
<?php
