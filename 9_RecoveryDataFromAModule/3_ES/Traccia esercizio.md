HTML & PHP (in un unico file): 

- Crea un unico file registrazione.php.

- Inizialmente, il codice deve mostrare un form di registrazione con campi per username e password.

- Il form deve inviare i dati a se stesso (action="registrazione.php") con method="post".

- Dopo l'invio, usa $_SERVER['REQUEST_METHOD'] per verificare se il metodo è POST.

- Se è POST, recupera l'username e la password e stampa un messaggio di benvenuto.

- Bonus: aggiungi una condizione else per mostrare il form solo quando il metodo non è POST.