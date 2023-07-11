<?php
    //Creo la classe PADRE S.Comunicazioni
    class SistemaComunicazione{

        //proprietà
        private $titolo;
        private $contenuto;
        private $mittente;
        private $destinatario;
        public $suoneria = 'DRRIIINN';

        //metodi
        public $invio;

        public function __construct($titolo, $contenuto, $mittente, $destinatario, $suoneria, $invio){
            $this->titolo = $titolo;
            $this-> contenuto = $contenuto;
            $this-> mittente = $mittente;
            $this-> destinatario = $destinatario;

            $this -> suoneria = 'DRRIIINN' ;
            $this-> invio = $invio;
        }
    
        public function getInvio(){
			$this-> invio;
		}




    

    }
  
    
?>