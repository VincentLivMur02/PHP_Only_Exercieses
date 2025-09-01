<?php

/*
Esercizio 2:

- Crea tre variabili: $nome, $anni e $città. 
- Assegna a ognuna un valore che ti descriva. Poi crea una nuova variabile $frase che, usando le virgolette doppie, contenga una frase del tipo: "Mi chiamo [il tuo nome], ho [la tua età] anni e vivo a [la tua città]." 
- Stampa a schermo la variabile $frase. 
- Aggiungi un commento su più righe che spieghi l'intero blocco di codice.

*/

# dichiarazione 3 variabili 
$name = "Enzo"; 
$age = 23;
$city = "Naples";

# dichiarazione variabile frase che avrà al suo interno le 3 variabili dichiarate in precedenza
$phrase = "My name is $name, i've $age years old and i'm living in $city"; 

echo $phrase; # solita funzione echo per mandare a schermo il messaggio

/*
Recap: 
- dichiarazione 3 variabili : $name , $age , $city
- dichiarazione variabile frase ( $phrase ) che avrà al suo interno le 3 variabili dichiarate in precedenza
- solita funzione echo per mandare a schermo il messaggio: echo $phrase;
*/