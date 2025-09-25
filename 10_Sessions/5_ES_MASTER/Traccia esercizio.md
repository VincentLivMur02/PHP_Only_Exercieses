ES_5_MASTER:

- Crea un unico file timer.php per simulare un meccanismo di timeout dopo 10 secondi.

- 1) Sessione: Avvia la sessione.

- 2) Timer: Controlla se $_SESSION['ultima_attivita'] esiste.

    - Se NON esiste, impostala al timestamp corrente (time()): $_SESSION['ultima_attivita'] = time();.

- 3) Timeout:

    - Se ESISTE, calcola la differenza tra il timestamp corrente e $_SESSION['ultima_attivita'].

    - Se la differenza è maggiore di 10 secondi, distruggi la sessione (session_destroy(), ecc.) e stampa un messaggio di timeout.

    - Se non c'è stato timeout, aggiorna $_SESSION['ultima_attivita'] al timestamp corrente e stampa un messaggio di benvenuto.