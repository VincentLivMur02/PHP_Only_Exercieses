<?php

/*

Esercizio 5:

- Crea una funzione trovaElemento() che accetta due parametri: un array e un valore da cercare. 
- La funzione deve restituire true se il valore è presente nell'array, altrimenti false.

*/

function foundTheEl($arrMisteryEl = [3, "Bread", "Water", true, false, 3, 869, 7584]){
    if (in_array(3, $arrMisteryEl)) {
        echo "True, the element is in the array!";
    } else {
        echo "False, the element isn't in the array!";
    }   
    print_r($arrMisteryEl);
}

foundTheEl();