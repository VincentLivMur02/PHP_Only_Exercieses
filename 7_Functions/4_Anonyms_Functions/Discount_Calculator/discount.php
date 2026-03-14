<?php

/*

- Immagina di voler creare un piccolo strumento rapido per calcolare quanto pagherai un prodotto scontato.

- Requisiti:

- Crea una funzione anonima e salvala nella variabile $applicaSconto.

- La funzione deve accettare due parametri: $prezzo e $percentualeSconto.

- Logica: Calcola il prezzo finale. 

- Esempio: $finale = $prezzo - ($prezzo * $percentualeSconto / 100);.

- La funzione deve fare il return del prezzo finale.

- Esecuzione: Chiama la funzione usando la variabile (es: echo $applicaSconto(100, 20);) per vedere se un prodotto da 100€ scontato del 20% ti restituisce 80.

*/

# creazione funzione anonima con parametri
$applicaSconto = function($prezzo, $percentualeSconto){
    # calcolo del prezzo finale
    $finale = $prezzo - ( $prezzo * $percentualeSconto / 100 );
    # ritornare il prezzo finale
    return $finale;
};

echo $applicaSconto(100,20); # 80
