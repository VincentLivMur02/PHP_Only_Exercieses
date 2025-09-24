<?php

# verify if the dates are sended by the method POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # verify if the var 'name', 'email' and 'message' exist into the array POST
    if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['message']) && !empty($_POST['message'])) {
        # !empyt useful for more strong validation
        
        # use the htmlspecialchars() to verify variables and print...
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        echo "Sending data: <br>" # retrun all of data
        . $name . "<br>" 
        . $email . "<br>" 
        . $message . "<br>";
    } else {
        echo "Missing data!"; # error message if all of data isn't insert into input field
    }
} else {
    echo "
    <form action='save_contact.php' method='post'>
        <label for='name'> Name : </label>
        <input type='text' name='name'>
        <br>
        <br>
        <label for='email'> Email : </label>
        <input type='text' name='email'>
        <br>
        <br>
        <textarea name='message'></textarea>
        <button type='submit'>Send</button>
    </form>
    ";
}

