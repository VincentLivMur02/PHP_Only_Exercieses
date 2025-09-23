<?php

/*

Esercizio 4 - method_exists() (Uso avanzato):

- Crea una classe Notificatore che ha un metodo inviaEmail() e un metodo inviaSMS().

- Crea una classe Messaggio che ha solo un metodo inviaEmail().

- Scrivi una funzione notificaUtente($oggetto) che usi method_exists() per chiamare inviaEmail() se disponibile, e poi inviaSMS() se disponibile, su qualsiasi oggetto le venga passato.

*/

class Notificator {
    public function sendEmail(){}
    public function sendSMS(){}
}

class Message {
    public function sendEmail(){}
}

$newNotificator = new Notificator();
$newMess = new Message();


function userNotification($object) {
    if (method_exists($newNotificator, "sendEmail")) {
        echo "The method 'sendEmail()' are available: $object";
    } else if (method_exists($newNotificator, "sendSMS")){
        echo "The method 'sendSMS()' are available: $object";
    } else if (method_exists($newMess, "sendEmail")){
        echo "The method 'sendEmail()' are available: $object";
    }
} 

userNotification();