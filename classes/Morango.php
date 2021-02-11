<?php

class Morango extends Frutas {
    //put your code here
    public $tamanho;
    
    public function __construct($nome, $cor, $tamanho) {
        $this->tamanho = $tamanho;
        $this->setNome($nome);
        $this->setCor($cor);
    }

    public function mesagem(){
        echo "Eu amo morango <br>";
        $this->into();
    }
}
