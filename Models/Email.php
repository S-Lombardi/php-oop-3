<?php
    include("Allegato.php");

    //creo la classe Email, figlia di SistemaComunicazione
    class Email extends SistemaComunicazione{

        private $allegato;
        
        public static $colore_led = 'Green';
        
        public function __construct($_titolo, $_contenuto, $_mittente, $_destinatario, $_invio){
            parent::__construct($_titolo, $_contenuto, $_mittente, $_destinatario, $_invio);

        }

        //incapsulamento della classe Allegato
        public function setAllegato($allegato){
            $this -> allegato = $allegato;
        }
        public function getAllegato(){
            return $this-> allegato;
        }

        //polimorfismo su metodo Invio() del genitore
        public function getInvio(){
            if( $this -> invio === true){
                return 'Invio e-mail effettuato';
            }
            else{
                return 'Invio e-mail non effettuato';
            }
        }
        
        public function getInoltro(){
            return 'Email inoltrata';
        }


    }
?>