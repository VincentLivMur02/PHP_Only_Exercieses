ES_3 MASTER : 
- Crea un unico file carrello.php che simula l'aggiunta di prodotti a un carrello.

- 1_Stato GET (Form): Mostra un form con un campo di testo per un nome di prodotto (name="prodotto") e un pulsante "Aggiungi al Carrello".

- 2_Sessione: Avvia la sessione (session_start()). Inizializza l'array $_SESSION['carrello'] se non esiste.

- 3_Stato POST (Aggiungi):

    - Se il form viene inviato (POST) e il prodotto non è vuoto, aggiungi il prodotto all'array $_SESSION['carrello'].

    - Dopo l'aggiunta, reindirizza l'utente a carrello.php con header('Location: carrello.php'); exit; per evitare il Form Resubmission Warning.

- 4_Visualizzazione: Sotto il form, mostra un elenco (<ul> o <ol>) dei prodotti attualmente presenti in $_SESSION['carrello'].


