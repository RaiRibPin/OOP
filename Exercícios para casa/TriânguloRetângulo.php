<?php
    include_once("Forma.php");

    class TriânguloRetângulo extends Forma {
        private $base;
        private $altura;

        public function __construct($base, $altura){
            $this->base = $base;
            $this->altura = $altura;
        }

        public function calcularÁrea(){
            return ($this->base * $this->altura) / 2;
        }

        public function calcularPerímetro(){
            $hipotenusa = sqrt(pow($this->base, 2) + pow($this->altura, 2));

            return $this->base + $this->altura + $hipotenusa;
        }
    }
?>