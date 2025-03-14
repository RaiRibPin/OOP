<?php
    include_once("Circulo.php");

    class CirFilho extends Círculo {
        
        protected $raio = 5;

        function __construct(){}
        function getCircunferência() {
            return 2 * round(pi(), 2) * $this->raio;
        }
    }

    $cirfilho01 = new CirFilho();
    echo "<h2>Círculo</h2>";
    echo "Circunferência: {$cirfilho01->getCircunferência()}<br>";
    echo "Área: {$cirfilho01->getÁrea()}";

?>