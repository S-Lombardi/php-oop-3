<?php
    //require_once __DIR__."Allegato.php";

    include("Allegato.php");

    //creo la classe Email, figlia di SistemaComunicazione
    class Email extends SistemaComunicazione{

        //proprietà
        private $allegato;

        //metodi
        public $inoltro;


        public function __construct($_titolo, $_contenuto, $_mittente, $_destinatario, $_invio, $inoltro){
            parent::__construct($_titolo, $_contenuto, $_mittente, $_destinatario,  $_invio);
            $this-> inoltro = $inoltro;
        }

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


    }
?>