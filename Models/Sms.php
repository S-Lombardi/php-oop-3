<?php

    //creo la classe Sms, figlia di SistemaComunicazione
    class Sms extends SistemaComunicazione{

        //proprietà
        private $notifica_lettura;

        //metodi
        public $accettazione_risposta;

        public function __construct($_titolo, $_contenuto, $_mittente, $_destinatario, $_invio, $notifica_lettura, $accettazione_risposta){
            parent::__construct($_titolo, $_contenuto, $_mittente, $_destinatario, $_invio);
            $this-> notifica_lettura = $notifica_lettura;
            $this -> accettazione_risposta = $accettazione_risposta;
        }

        public function getNotificaLettura(){
            return $this -> notifica_lettura;
        }

        public function getAccettazioneRisposta(){
            return $this -> accettazione_risposta;
        }

        //Polimorfismo su invio
        public function getInvio(){
            if( $this -> invio === true){
                return 'SMS inviato';
            }
            else{
                return 'SMS non inviato';
            }
        }
    }
?>