<?php

/*

Esercizio 7:

- Crea un array associativo per uno studente con le chiavi nome, età e città. 
- Stampa il nome dello studente usando un ciclo foreach per accedere alla chiave nome

*/

$student = ["Jhon", 54, "NewYork"];

foreach ($student as $newStudent) {
    $newStudent = array_slice($student, 0,1);
    var_dump($newStudent);
}

// dubbi.. 


