<?php

/*

📝 Il Generatore di Tag (Explode + Ciclo)
- Spesso gli utenti scrivono i tag di un blog tutti insieme. Tu devi separarli per creare dei piccoli "badge" HTML.

- Obiettivo: Trasformare una stringa grezza in una lista puntata.

    - Hai questa stringa: $raw_tags = "php,programmazione,webdesign,backend";.

    - Esplodi la stringa usando la virgola.

    - Usa un ciclo foreach per scorrere l'array ottenuto.

    - Per ogni elemento, stampa: <li>#[nome_tag]</li>.

    - Ricordati di aprire e chiudere il tag <ul> fuori dal ciclo.

*/

$raw_tags = "php,programmazione,webdesign,backend";

$esploso = explode(",", $raw_tags);

print_r($esploso);

echo "<ul>";
foreach ($esploso as $esplosi) {
    echo "<li>#$esplosi</li>";
}
echo "</ul>";
