<?php

class Frutas {

    private $cor;
    private $nome;
    private $peso;
    
    public function __construct($nome,$cor) {
        $this->nome = $nome;
        $this->cor = $cor;
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
    
    protected function into(){
        echo "A fruta é {$this->nome} e a cor é {$this->cor}";
    }

}
