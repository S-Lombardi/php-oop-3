<?php

    //creo la classe Notifiche, figlia di SistemaComunicazione
    class Notifica extends SistemaComunicazione{

        //proprietà
        private $icona;
        private $visibile;
        public static $colore_led = 'Yellow';

        public function __construct($_titolo, $_contenuto, $_mittente, $_destinatario, $_invio, $icona, $visibile){
            parent::__construct($_titolo, $_contenuto, $_mittente, $_destinatario, $_invio);
            $this-> icona = $icona;
            $this-> visibile = $visibile;
        }

        public function getIcona(){
            return $this -> icona;
        }

        public function getVisibile(){
            if( $this -> invio === true){
                return 'Visibile ';
            }
            else{
                return 'Non visibile';
            }
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