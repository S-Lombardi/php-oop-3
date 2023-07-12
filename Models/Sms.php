<?php

    //creo la classe Sms, figlia di SistemaComunicazione
    class Sms extends SistemaComunicazione{

        //proprietà
        public static $colore_led = 'Red';
        
        //metodi
        private $notifica_lettura;
        public $accettazione_risposta;

        public function __construct($_titolo, $_contenuto, $_mittente, $_destinatario, $notifica_lettura, $accettazione_risposta,$_invio){
            parent::__construct($_titolo, $_contenuto, $_mittente, $_destinatario, $_invio);
            $this-> notifica_lettura = $notifica_lettura;
            $this -> accettazione_risposta = $accettazione_risposta;
        }

        
        
        public function getNotificaLettura(){
            if( $this -> invio === true){
                return 'Lettura avvenuta';
            }
            else{
                return 'Lettura non avvenuta';
            }
        }
        
        
        public function getAccettazioneRisposta(){
            return 'si';
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