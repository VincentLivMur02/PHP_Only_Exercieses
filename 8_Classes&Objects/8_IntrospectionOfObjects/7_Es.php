<?php


/*

Esercizio 7 - get_declared_classes():

- Crea almeno due classi nel tuo script.

- Usa get_declared_classes() per ottenere un array di tutte le classi disponibili nello script. Stampa il risultato.

*/

class Car { } 
class Bike { }

print_r(get_declared_classes());