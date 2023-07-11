<?php

    //creo la classe Notifiche, figlia di SistemaComunicazione
    class Notifiche extends SistemaComunicazione{

        //proprietà
        public $icona;

        //metodi
        public $click;

        public function __construct($_titolo, $_contenuto, $_mittente, $_destinatario, $_invio, $icona, $click ){
            parent::__construct($_titolo, $_contenuto, $_mittente, $_destinatario,  $_invio);
            $this-> icona = $icona;
            $this-> click = $click;
        }

        public function geIcona(){
            return $this -> notifica_lettura;
        }

        public function getClick(){
            return $this -> click;
        }
    }
?>