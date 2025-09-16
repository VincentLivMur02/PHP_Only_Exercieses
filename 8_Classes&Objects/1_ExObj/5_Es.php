<?php

/*

Esercizio 5:

- Aggiungi alla classe Libro un metodo leggi() che stampi un messaggio per confermare che l'oggetto è stato "letto".

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
    #es 5
    public function alreadyRead() {
        echo "<br> <b>I just read this book!</b>";
    }
} 

# creation obj
$newBook = new Book("Harry Potter and the Philosopher's Stone", "J.K.Rowling", 1997);
$newBook->printInfo();
$newBook->alreadyRead();