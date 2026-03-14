<?php

/*

📝 Da Stringa a JSON (Il Mix)
- Mettiamo tutto insieme: explode + json_encode.

- Obiettivo: Trasformare una lista di hobby in una stringa JSON.

    - Hai questa stringa: $hobby_raw = "Nuoto,Calcio,Coding,Musica";.

    - Usa explode per trasformarla in un array.

    - Trasforma l'array ottenuto in una stringa JSON usando json_encode.

    - Stampa il risultato. (Dovresti vedere qualcosa tipo ["Nuoto","Calcio",...]).

*/

$hobby_raw = "Nuoto,Calcio,Coding,Musica";

$new_hobby_raw = explode("," , $hobby_raw); # trasformo stringa in JSON

echo json_encode($new_hobby_raw); # stringa JSON ottenuta 