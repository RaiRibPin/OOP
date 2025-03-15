<?php
    include_once("Forma.php");

    class Retângulo extends Forma {
        private $base;
        private $altura;

        const MSG = "Faço parte da Classe Retângulo";

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

    $retangulobject = new Retângulo(10, 5);
    echo "<h2>" . $retangulobject::MSG . "</h2>";
    echo "Área: " . $retangulobject->calcularÁrea() . "<br>";
    echo "Perímetro: " . $retangulobject->calcularPerímetro();
?>