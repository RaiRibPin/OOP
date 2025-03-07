<?php
    class Imóveis{

        public function __construct($arg01, $arg02, $arg03, $arg04, $arg05){
            $this->tipoImovel = $arg01;
            $this->valor = $arg02;
            $this->regiao = $arg03;
            $this->metragem = $arg04;
            $this->descricao = $arg05;
        }
        private string $tipoImovel;
        private float $valor;
        public string $regiao;
        protected float $metragem;
        private string $descricao;

        //magicos
        public function __set ($name, $value){
            $this->$name = $value;
        }
        public function __get ($name){
            return $this->$name;
        }
    }

    class Rural extends Imóveis {
        //sobrecarga, sobrescrever a função herdada.
        function __construct(){}
        function teste(){
            $this->valor;
        }
    }

    $Imovel02 = new Rural();
    $Imovel02->tipoImovel = "Casa";
    echo $Imovel02->tipoImovel;

    $Imovel01 = new Imóveis("Condomínio", 2, "Zona Sul", 240, "Condomínio Vida Bela localizado na região nobre da cidade de Sorocaba.");
    // $Imovel01->regiao = "Zona Norte";
    // $Imovel01->tipoImovel = "Comercial";
    // $Imovel01->descricao = "Espaço bem localizado na Avenida Itavuvu";
    // $Imovel01->valor = 100000000.00;
    
    echo "tipoImovel: ", $Imovel01->tipoImovel . "\n";
    echo "Região: ", $Imovel01->regiao . "\n";
    echo "Valor: ", $Imovel01-> valor . "\n";
    echo "Metragem: ", $Imovel01->metragem . "\n";
    echo "Descrição: ", $Imovel01->descricao . "\n";
?>