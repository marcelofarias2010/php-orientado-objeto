<?php


class Filho extends Pai{
    
    public function prefixoNome($nome) {
        if($nome == "João"){
            $prefixo = "Sr: ";
        }elseif($nome == "Maria"){
            $prefixo = "Sra: ";
        }else{
            $prefixo = "";
        }
        
        return "{$prefixo} {$nome}";
    }

}
