<?php

/*

📝 Traccia: Il Messaggio di Benvenuto
- Immagina di voler salutare un utente. Se l'utente ha impostato un soprannome, usa quello. Se non lo ha impostato (quindi è null o non esiste), usa il suo nome reale. Se manca anche quello, usa "Ospite".

- Requisiti:

    - Definisci $soprannome = null;

    - Definisci $nomeReale = "Mario";

- Usa l'operatore ?? per assegnare a una variabile $nomeDaVisualizzare il primo valore disponibile tra i tre (in ordine: soprannome -> nomeReale -> "Ospite").

- Stampa: "Benvenuto, $nomeDaVisualizzare!".

*/

$soprannome = null;
$nomeReale = "Mario";

$nomeDaVisualizzare = $soprannome ?? $nomeReale ?? "Ospite";

echo "Benvenuto $nomeDaVisualizzare";