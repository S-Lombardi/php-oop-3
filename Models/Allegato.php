<?php

    class Allegato{

        private $nome;
        private $dimensione;
        private $contenuto;

        public function __construct( $nome, $dimensione, $contenuto ){
            $this-> nome = $nome;
            $this-> dimensione = $dimensione;
            $this-> contenuto = $contenuto;
        }

        public function getNome(){
            return $this -> nome;
        }

        public function getDimensione(){
            return $this -> dimensione;
        }

        public function getContenuto(){
            return $this -> contenuto;
        }
    }

    

?>