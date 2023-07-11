<?php
    include __DIR__."Allegato.php";

    //creo la classe Email, figlia di SistemaComunicazione
    class Email extends SistemaComunicazione{

        //proprietà
        public $allegato;
        public $notifica_consegna;

        //metodi
        public $inoltro;
        public $stampa;

        public function __construct($_titolo, $_contenuto, $_mittente, $_destinatario,  $_invio, Allegato $allegato, $notifica_consegna, $inoltro, $stampa ){
            parent::__construct($_titolo, $_contenuto, $_mittente, $_destinatario,  $_invio);
            $this-> allegato = $allegato;
            $this-> notifica_consegna = $notifica_consegna;
            $this-> inoltro = $inoltro;
        }

        public function setStampa($stampa) {
            $this->stampa = $stampa;
        }

        public function getStampa() {
            return $this->$stampa;
        }

        //polimorfismo su metodo Invio() del genitore
        public function Invio(){
            return "Email inviata";
        }


    }
?>