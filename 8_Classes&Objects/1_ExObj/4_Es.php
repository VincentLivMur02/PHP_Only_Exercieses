<?php

/*

Esercizio 4:

- Crea una classe Libro con proprietà titolo, autore e anno_pubblicazione.
- Crea un costruttore che accetti questi parametri.

*/

# creation of a class
class Book {
    # properties
    public $title;
    public $author;
    public $publicationDate;

    # constructor 
    public function __construct($title, $author, $publicationDate) {
        $this->title = $title;
        $this->author = $author;
        $this->publicationDate = $publicationDate;
    }

    # method 
    public function printInfo() {
        echo "Title: " . $this->title . 
        "<br> Author: " . $this->author .
        "<br> Publication Date: " . $this->publicationDate;
    } 
} 

# creation obj
$newBook = new Book("Harry Potter and the Philosopher's Stone", "J.K.Rowling", 1997);
$newBook->printInfo();



