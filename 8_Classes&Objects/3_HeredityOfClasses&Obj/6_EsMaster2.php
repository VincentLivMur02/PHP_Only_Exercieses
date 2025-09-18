<?php

/*

Esercizio 1 - Classe Base Libro:

- Crea una classe Libro con le proprietà private $titolo, $autore e $annoPubblicazione.

- Aggiungi un costruttore che accetti e imposti questi valori.

- Crea un metodo public getInfo() che restituisca una stringa formattata con tutte le informazioni del libro (es. "Titolo: ..., Autore: ..., Anno: ...").

--------------

Esercizio 2 - Classe Figlia Ebook:

- Crea una classe Ebook che erediti da Libro.

- Aggiungi una proprietà private aggiuntiva: $dimensioneFile.

- Nel costruttore di Ebook, assicurati di chiamare il costruttore del genitore (Libro) e di impostare la nuova proprietà.

- Sovrascrivi il metodo getInfo() in modo che aggiunga anche l'informazione sulla dimensione del file.

--------------


*/

# creation of class Book 
class Book {
    # properties
    private $title;
    private $author;
    private $yearOfPublication;

    # construct
    public function __construct($title, $author, $yearOfPublication){
        $this->title = $title;
        $this->author = $author;
        $this->yearOfPublication = $yearOfPublication;
    }

    # public getters to access private properties
    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getyearOfPublication() {
        return $this->yearOfPublication;
    }

    # method
    public function getInfo(){
        echo "Title: " . $this->title . "<br> 
        Author: " . $this->author . "<br> 
        Year of Publication: " . $this->yearOfPublication;
    }
}

# creation of new class which extends class "Book"
class Ebook extends Book {
    # properties
    private $dimensionFile;

    # construct 
    public function __construct($title, $author, $yearOfPublication, $dimensionFile) {
        parent::__construct($title, $author, $yearOfPublication);
        $this->dimensionFile = $dimensionFile;
    }

    # public getter to access private property
    public function dimensionFile() {
        return $this->dimensionFile;
    }

    # methods 
    # ovverride method "getInfo"
    public function getInfo(){
        return parent::getInfo() . "<br>
        File dimension: " . $this->dimensionFile . "Mb";
    }
}

# new class 
class Library {
    # properties
    public static $numArticles = 0;
    public static $catalog = []; # empty array

    # method
    public static function addArticles($item) { # parameters, accept a single item
        self::$catalog[]= $item; # Add the single item to the array
        self::$numArticles++;  
    }
}

# new obj
$newBook = new Book("Harry Potter and the Sorcerer's Stone" , "J. K. Rowling",  1997);
$newEbook = new Ebook("The Hobbit", "J.R.R. Tolkien", 1937, 2.86);
$newEbookTwo = new Ebook("Dune", "Frank Herbert", 1965, 15.00);

# use the static method from Library class to register books or ebooks
Library::addArticles($newBook);
Library::addArticles($newEbook);
Library::addArticles($newEbookTwo);

# print total numarticles
echo "Total students subscribed: " . Library::$numArticles . "<br><br>";

# iterate on the array "catalog"
foreach(Library::$catalog as $singleArticle){
    echo $singleArticle->getInfo() ."<br><br>";
} 