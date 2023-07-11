<?php
    //Creo la classe PADRE S.Comunicazioni
    class SistemaComunicazione{

        //proprietà
        private $titolo;
        private $contenuto;
        private $mittente;
        private $destinatario;
        public static $suoneria = 'DRRIINN' ;

        //metodi
        public $invio;

        function __construct($titolo, $contenuto, $mittente, $destinatario, $invio,){
            $this->titolo = $titolo;
            $this-> contenuto = $contenuto;
            $this-> mittente = $mittente;
            $this-> destinatario = $destinatario;
            $this -> invio = $invio;
        }

        public function getTitolo(){
            return $this ->titolo;
        }
        
        public function getContenuto(){
            return $this ->contenuto;
        }

        public function getMittente(){
            return $this-> mittente;
        }
        
        public function getDestinatario(){
			return $this -> destinatario;
		}



        public function getInvio(){
            if( $this -> invio === true){
                return 'Invio effettuato';
            }
            else{
                return 'Invio non effettuato';
            }
        }


    }
  
    
?>