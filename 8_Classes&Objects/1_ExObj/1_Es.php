<?php

/*

Esercizio 1:

- Crea una classe Auto con le proprietà marca e modello. 
- Crea un oggetto di questa classe e assegna dei valori. 
- Stampa i valori delle proprietà.

*/


# creation of a class
class Car {
    #properites
    public $brand;
    public $model;
}

# creation of an object "Car"
$newCar = new Car();

# assign a value
$newCar->brand = "Ferrari";
$newCar->model = "F40";

var_dump($newCar);


