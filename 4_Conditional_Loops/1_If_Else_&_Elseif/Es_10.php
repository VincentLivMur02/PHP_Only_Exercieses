<?php

/*

Esercizio 10:

- Crea una variabile $eta (es. 35).

- Se l'età è minore di 13, stampa "Bambino".

- Se è tra 13 e 19 (inclusi), stampa "Adolescente".

- Se è tra 20 e 64 (inclusi), stampa "Adulto".

- Se è 65 o più, stampa "Anziano".

*/

$age = 1098;

if ($age < 13 ) {
    echo "$age : you're a child!";
} else if ($age >= 13 && $age <= 19 ) {
    echo "$age : you're a teenager!";
} else if ($age >= 20 && $age <= 64 ) {
    echo "$age : you're an adult!";
} else if ($age >= 65) {
    echo "$age : you're old!";
} 