<?php

/*

Esercizio 7:

- Crea un array associativo per uno studente con le chiavi nome, età e città. 
- Stampa il nome dello studente usando un ciclo foreach per accedere alla chiave nome

*/

$student = ["name" => "John", "age" => 54, "city" => "New York"];

foreach ($student as $newStudent) {
    $newStudent = array_slice($student, 0,1);
    echo $student["name"] . "<br>";
}




