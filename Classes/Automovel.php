<?php
    // variável
    // $qtdRoda
    class Automovel {
        // public, private, protected
        // propriedade
        private $qtdRoda;
        private $motor;
        public $renavan;
        public $cor;
        private $qtdPorta;
        private $modelo;
        public $fabricante;
        public $anoFab;

        // métodos
        public function Acelerar($vel){
            echo $vel, " kh";
        }

        // modificadores
          // atribui
        public function set_QtdPorta($arg){
            $this->qtdPorta = $arg;
        }
          // exibir
        public function get_QtdPorta(){
            return $this->qtdPorta;
        }
        public function set_Motor($arg){
            $this->motor = $arg;
        }
          // exibir
        public function get_Motor(){
            return $this->motor;
        }
        
        public function set_Modelo($arg){
            $this->modelo = $arg;
        }


        public function get_Modelo(){
            return $this->modelo;
        }
        // mágicos
        public function __set($name , $value){
            $this->$name = $value;
        }

        public function __get($name){
            return $this->$name;
        }

    }

    // criar um objeto
    $aut01 = new Automovel();
    $aut02 = new Automovel();

    //$aut01->modelo = "Astra";
    $aut01->set_Modelo("Astra");
    //$aut01->qtdRoda = 5;
    //$aut01->motor = 2.5;
    $aut01->set_Motor(2.8);
    $aut01->renavan = "1234455";
    $aut01->cor = "prata";
    $aut01->fabricante = "Chevrolet";
    $aut01->anoFab = "1999";
    //$aut01->qtdPorta = 4;
    $aut01->set_QtdPorta(10);

    // $aut01->modelo = "Astra";
    // $aut01->qtdPorta = "20";
    // $aut01->motor = "1.5";

    //$aut02->modelo = "Sandero";
    //$aut02->motor;
    
    echo "Modelo: ", $aut01->modelo;
    echo "<br>";
    echo "Quantidade de Porta: ", $aut01->qtdPorta;
    echo "<br>";
    echo "Motor: ", $aut01->motor;
    echo "<br>";
    echo $aut01->acelerar(180);
    echo "<hr>";
    //echo "Modelo: $aut02->modelo";
    echo "<br>";
    //echo "Motor: $aut02->motor;
    echo "<br>";
    echo $aut02->acelerar(100);

    echo "<hr>";

    $aut01->qtdRoda = 2;
    $aut01->qtdPorta = 5;

    echo "<p> Quantidade de Rodas: " . $aut01->qtdRoda ."</p>";
    echo "<p> Quantidade de Portas " . $aut01->qtdPorta ."</p>";
    

?>