<?php
    include("Allegato.php");

    //creo la classe Email, figlia di SistemaComunicazione
    class Email extends SistemaComunicazione{

        //proprietà
        private $allegato;  //Allegato non è n aproprietà obblligatoria, quindi non va nel costruttore
        //metodi
        public $inoltro;



        public function __construct($_titolo, $_contenuto, $_mittente, $_destinatario, $_invio, $inoltro){
            parent::__construct($_titolo, $_contenuto, $_mittente, $_destinatario, $_invio);
            $this-> inoltro = $inoltro;
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
        
        public function Inoltro(){
            return 'Email inoltrata';
        }


    }
?>