<?php

/*

Esercizio 6:

- Le classi anonime possono accedere a variabili del contesto esterno (l'ambito in cui sono definite) usando la parola chiave use.

- Crea una variabile $nome = "Mario";.

- Crea una classe anonima che, nel suo costruttore, usi la variabile $nome e la salvi in una sua proprietà interna. Il costruttore deve essere definito come __construct() use ($nome).

- Crea un metodo presentati() che utilizzi la proprietà salvata per stampare "Ciao, mi chiamo Mario!".

*/

$name = "Mario";

$anonymusClass = new class {
    public function __construct($name)  {
        $this->name = $name;
    }
    public function presentYourself(){
        echo "Hello my name is " . $this->name;
    }
};

$anonymusClass->presentYourself();