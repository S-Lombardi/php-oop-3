<?php

    //creo la classe Sms, figlia di SistemaComunicazione
    class Sms extends SistemaComunicazione{

        //proprietà
        private $notifica_lettura;

        //metodi
        public $risposta;

        public function __construct($_titolo, $_contenuto, $_mittente, $_destinatario, $_invio, $notifica_lettura, $risposta){
            parent::__construct($_titolo, $_contenuto, $_mittente, $_destinatario, $_invio);
            $this-> notifica_lettura = $notifica_lettura;
            $this -> risposta = $risposta;
        }

        public function getNotificaLettura(){
            return $this -> notifica_lettura;
        }

        public function getRisposta(){
            return $this -> risposta;
        }
    }
?>