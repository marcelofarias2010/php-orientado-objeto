<?php


abstract class Carro {
    public $nome;
    
    public function __construct($nome) {
        $this->nome = $nome;
    }
    
    protected abstract function intro();
}
