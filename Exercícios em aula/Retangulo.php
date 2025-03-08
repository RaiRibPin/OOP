<?php

    // Classe
    class Retângulo {        
        
        protected $comprimento;
        protected $largura;

        public function __construct($comprimento, $largura){
            $this->comprimento = $comprimento;
            $this->largura = $largura;
        }
        
        public function __set ($name, $value) {
            $this-> $name = $value;
        }

        public function __get ($name) {
            return $this->$name;
        }

        public function getÁrea() {
            return $this->comprimento * $this->largura;
        }
        public function getPerimetro() {
            return 2 * ($this->comprimento + $this->largura);
        }
    }

    // Herança
    class Ret extends Retângulo {
        function __construct(){
            // parent::__construct(15, 5); -> Essa linha chama o construtor/a função do herdante/pai.
        }
    
        public function getÁrea() {
            return 5* $this->comprimento;
        }

        function CalcularCusto($valor){
            return $valor * self::getÁrea();
            // self:: significa que você está chamando uma função que se repete no herdeiro e herdante, mas nesse caso está chamando a do herdeiro.
        }
    }

    // Objeto
    $retângulo01 = new Retângulo(15, 5);
    $retângulo01->comprimento = 6;
    $retângulo01->largura = 4;
    
    echo "Comprimento: {$retângulo01->comprimento} \n";
    echo "Largura: {$retângulo01->largura} \n";
    
    echo "Área: {$retângulo01->getÁrea()} \n";
    echo "Perímetro: {$retângulo01->getPerimetro()} \n";


    $retângulo02Filha = new Ret();
    $retângulo02Filha ->largura = 8;

    echo "Teste: {$retângulo02Filha->largura} \n";
?>