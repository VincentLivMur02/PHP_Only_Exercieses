<?php

/*

Esercizio 2:

- Crea una funzione trovaMassimo() che accetta un array di numeri e restituisce il numero più grande al suo interno.

*/

function foundMax($arr) {
    print_r($arr);
    foreach ($arr as $numbers => $num) {
        if(in_array($num > 100, $arr)){
            echo "The max num in this array is: " . $num;
        }
    }
}

foundMax([23, 09.768, 67849, 34]);

# 1: set the function
# 2: iterate the array with foreach loop
# 3: $arr as $numbers => $num = foreache iterate every single ($num) value in the array

# 4: if(in_array($num > 100, $arr)){
#            echo "The max num in this array is: " . $num;
#    } = if condition is essential to help us for found the max num in the array

# 5: the array is initialized in the function call = foundMax([23, 09.768, 67849, 34]);
