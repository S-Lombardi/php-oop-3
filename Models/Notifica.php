<?php

    //creo la classe Notifiche, figlia di SistemaComunicazione
    class Notifica extends SistemaComunicazione{

        //proprietà
        private $icona;
        private $visibile;

        public function __construct($_titolo, $_contenuto, $_mittente, $_destinatario, $_invio, $icona, $visibile){
            parent::__construct($_titolo, $_contenuto, $_mittente, $_destinatario, $_invio);
            $this-> icona = $icona;
            $this-> click = $visibile;
        }

        public function geIcona(){
            return $this -> icona;
        }

        public function getVisibile(){
            return $this -> visibile;
        }


        //Polimorfismo su invio
        public function getInvio(){
            if( $this -> invio === true){
                return 'Notifica inviata';
            }
            else{
                return 'Notifica non inviata';
            }
        }



    }
?>