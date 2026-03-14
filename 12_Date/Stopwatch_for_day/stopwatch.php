<?php

/*

📝 Il Cronometro del Giorno (Date)
- Obiettivo: Stampare la data e l'ora attuale in un formato specifico.

- Requisiti:

    - Usa la funzione date() per stampare la data di oggi nel formato: Giorno/Mese/Anno.

    - Subito sotto, stampa l'ora attuale nel formato: Ore:Minuti.

    - Sfida: Prova a stampare il nome del giorno della settimana per intero (cerca il simbolo giusto per date() nella documentazione o prova a indovinarlo, è una lettera singola!).

*/

echo "Oggi è il giorno: " . date("d/m/Y") . "<br>";
echo "Sono le ore: " . date("H:m:s") . "<br>";
echo "Giorno di oggi, per esteso " . date("l");




