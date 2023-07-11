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

        public function __construct($titolo, $contenuto, $mittente, $destinatario, $invio){
            $this->titolo = $titolo;
            $this-> contenuto = $contenuto;
            $this-> mittente = $mittente;
            $this-> destinatario = $destinatario;
            $this-> invio = $invio;
        }
    
        public function Invio(){
			return 'Invio effettuato';
		}

  

    }
  
    
?>