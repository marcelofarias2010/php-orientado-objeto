<?php

class Frutas {

    private $cor;
    private $nome;
    private $peso;
    
    public function __construct($cor,$nome,$peso="5kg") {
        $this->cor = $cor;
        $this->nome = $nome;
        $this->peso = $peso;
    }

    function getCor() {
        return $this->cor;
    }

    function getNome() {
        return $this->nome;
    }

    function getPeso() {
        return $this->peso;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setPeso($peso) {
        $this->peso = $peso;
    }



}
