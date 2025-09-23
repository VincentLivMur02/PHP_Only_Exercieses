<?php

/*

Esercizio 4 - method_exists() (Uso avanzato):

- Crea una classe Notificatore che ha un metodo inviaEmail() e un metodo inviaSMS().

- Crea una classe Messaggio che ha solo un metodo inviaEmail().

- Scrivi una funzione notificaUtente($oggetto) che usi method_exists() per chiamare inviaEmail() se disponibile, e poi inviaSMS() se disponibile, su qualsiasi oggetto le venga passato.

*/

class Notificator {
    public function sendEmail(){
        echo "Sent email...<br>";
    }
    public function sendSMS(){
        echo "Sent SMS...<br>";
    }
}

class Message {
    public function sendEmail(){
        echo "Sending email only from message...<br>";
    }
}


function userNotification($object) {
    if (method_exists($object, "sendEmail")) {
        $object->sendEmail();
    } 
    if (method_exists($object, "sendSMS")) {
        $object->sendSMS();
    }
} 

$newNotificator = new Notificator();
$newMess = new Message();


userNotification($newNotificator);
userNotification($newMess);