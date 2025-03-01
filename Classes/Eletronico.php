<?php
    class Eletronico
    {
        // construtor, inicializa
        function __construct($arg01, $arg02){
            $this->categoria = $arg01;
            $this->voltagem = $arg02;
        }
        // propriedades
        private $categoria;
        private $voltagem;
        private $nome;
        // métodos
        public function __set($name, $value){
            $this->$name = $value;
        }
        public function __get($name){
            return $this->$name;
        }

    }
    
    $eletroCozinha = new Eletronico("Doméstico", 127);

    $eletroCozinha->categoria = "Doméstico";
    $eletroCozinha->voltagem = "127";

    echo "<p>Categoria: " , $eletroCozinha->categoria , "</p>";
    echo "<br>";
    echo "<p>Voltagem: " , $eletroCozinha->voltagem , "</p>";


    