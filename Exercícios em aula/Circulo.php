<?php

//Classe
class Círculo {
    protected $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    public function getÁrea() {
        return round(pi(), 2) * pow($this->raio, 2);
    }

}