<?php
    include_once("Forma.php");

    class TriânguloEquilátero extends Forma {
        private $lado;

        public function __construct($lado){
            $this->lado = $lado;
            
        }

        public function calcularÁrea(){
            return $this->lado * $this->lado;
        }

        public function calcularPerímetro(){
            return $this->lado * 3;
        }
    }
?>