<?php
    include_once("Forma.php");

    class TriânguloRetângulo extends Forma {
        private $base;
        private $altura;

        const MSG = "Faço parte da Classe Triângulo Retângulo";

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

    $triretangulobjeto = new TriânguloRetângulo(4, 7);
    echo "<h2>" . $triretangulobjeto::MSG . "</h2>";
    echo "Área: " . $triretangulobjeto->calcularÁrea() . "<br>";
    echo "Perímetro: " . $triretangulobjeto->calcularPerímetro();
?>