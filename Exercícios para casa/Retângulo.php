<?php
    include_once("Forma.php");

    class Retângulo extends Forma {
        private $base;
        private $altura;

        public function __construct($base, $altura){
            $this->base = $base;
            $this->altura = $altura;
        }

        public function calcularÁrea(){
            return $this->base * $this->altura;
        }

        public function calcularPerímetro(){
            return ($this->base * 2) + ($this->altura * 2);
        }
    }
?>