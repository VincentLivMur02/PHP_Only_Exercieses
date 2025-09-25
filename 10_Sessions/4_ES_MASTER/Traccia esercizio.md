ES_4_MASTER:

- Crea due file: form_invio.php e successo.php. Lo scopo è mostrare un messaggio di conferma su una pagina diversa da quella dove l'azione è avvenuta, usando le sessioni.

- 1) form_invio.php:

    - Contiene un form semplice (es. form di contatto).

    - Quando il form viene inviato con successo, salva un messaggio di conferma (es. "Messaggio inviato con successo!") in una variabile di sessione: $_SESSION['flash_message'] = "...".

    - Reindirizza l'utente a successo.php.

- 2) successo.php:

    - Verifica se $_SESSION['flash_message'] esiste.

    - Se esiste, stampa il messaggio e subito dopo cancella la variabile di sessione usando unset($_SESSION['flash_message']);. Questo assicura che il messaggio non appaia di nuovo se l'utente aggiorna la pagina.

    - Se la variabile non esiste, mostra un messaggio generico (es. "Benvenuto").