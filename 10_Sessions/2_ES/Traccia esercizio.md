ES_2 Crea due file: login.php e dashboard.php.

login.php:

- Avvia la sessione.

- Mostra un form con campi per username e password.

- Quando il form viene inviato con metodo POST, verifica che username e password siano stati inseriti.

- Se sono validi, imposta una variabile di sessione, ad esempio $_SESSION['logged_in'] = true;.

----------------------

Reindirizza l'utente a dashboard.php usando la funzione header('Location: dashboard.php');.

dashboard.php:

- Avvia la sessione.

- Verifica se la variabile di sessione $_SESSION['logged_in'] è impostata e true.

- Se è così, mostra un messaggio di benvenuto e un link per il logout.

- Se l'utente non è loggato, reindirizzalo alla pagina di login.

--------------------------------------------------------------------------

ES_3 - Logout

- Crea un file logout.php.

- Avvia la sessione.

- Distruggi la sessione usando le funzioni che ti ho mostrato (session_unset() e session_destroy()).

- Stampa un messaggio di conferma del logout.

- Aggiungi un link per tornare alla pagina di login.


