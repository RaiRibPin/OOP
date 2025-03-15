<?php
    include_once("Forma.php");

    class TriânguloEquilátero extends Forma {

        const MSG = "Faço parte da Classe Triângulo Equilátero";
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
    $triequilaterobjeto = new TriânguloEquilátero(8);
    echo "<h2>".$triequilaterobjeto::MSG."</h2>";
    echo "Área: {$triequilaterobjeto->calcularÁrea()}<br>";
    echo "Perímetro: {$triequilaterobjeto->calcularPerímetro()}";
?>