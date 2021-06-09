<?php

class User {
    //put your code here
    public $nome;
    public $sobrenome;
    public $email;
    
    public function getNome(){
        return $this->nome;
    }    
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
    public function setSobrenome($sobrenome){
        $this->sobrenome = filter_var($sobrenome, FILTER_SANITIZE_STRIPPED);
        //Este filtro remove dados que são potencialmente prejudiciais para seu 
        //aplicativo. É usado para remover tags e remover ou codificar caracteres indesejados.
    }
    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }
    }


}
