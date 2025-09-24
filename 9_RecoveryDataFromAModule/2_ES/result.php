<?php

# data recovery of 'search_term' and 'categories' of array GET
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    # verify if the var 'search_term' and 'categories' exist into the array GET
    if (isset($_GET['search_term']) && isset($_GET['categories'])) {
        # use the htmlspecialchars() to verify variables and print...
        $searchTerm = htmlspecialchars($_GET['search_term']);
        $categories = htmlspecialchars($_GET['categories']);
        echo "Result of " . $searchTerm . " into category " . $categories . "<br>"; # retrun all of data
    } else {
        echo "Missing data!"; # error message if all of data isn't insert into input field
    }
} else {
    echo "<form action='result.php' method='get'>
        <input name='search_term'> Search Product : </input>
        <select name='categories'>
            <option value='T-Shirts'>T-Shirts</option>
            <option value='Jumpers'>Jumpers</option>
            <option value='Jeans'>Jeans</option>
            <option value='Shoeses'>Shoeses</option>
        </select>
        <br>
        <br>
        <button type='submit'>Search</button>
    </form>";
}

// dubbi..
