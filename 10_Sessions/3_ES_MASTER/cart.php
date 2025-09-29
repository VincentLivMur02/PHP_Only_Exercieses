<?php
    # start session
    session_start();

    # if session['cart'] doesn't exist, inizialise the array
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    # check if the form has beeen submitted by via POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    # If it is a POST request, process the form data
    if (isset($_POST['product']) && !empty($_POST['product'])) {
        $product = htmlspecialchars($_POST['product']);

        # add $products into the array
        $_SESSION['cart'][] = $product; 

        # redirect user to the cart.php
        header('Location:cart.php'); 
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
        <h1>Add Product</h1>
        <?php
        # Display the error message if there is one
        if (isset($error_message)) {
            echo "<p style='color:red;'>$error_message</p>";
        }
        ?>
        <form action="cart.php" method="post">
            <label for="product">Product:</label>
            <input type="text" name="product">
            <br>
            <br>
            <button type="submit">Add to Cart <i class="fa-solid fa-cart-shopping"></i></button>
        </form>
        <hr>
    
        <h2>Shopping cart (<?php echo count($_SESSION['cart']); ?> items)</h2>
        <?php
        // 3. Correct display: iterate over the shopping cart in session
        if (!empty($_SESSION['cart'])) {
            echo "<ul>"; 
            foreach ($_SESSION['cart'] as $item) {
                echo "<li>" . $item . "</li>";
            }
            echo "</ul>";
        } else {
        echo "<p>The cart is empty.</p>";
        }
    ?>
    </body>
    </html>
<?php
