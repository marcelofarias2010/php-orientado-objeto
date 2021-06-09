<?php

require __DIR__."/classes/User.php";

$usuario = new User();

$usuario->nome = "marcelo";
$usuario->sobrenome = "Farias";
$usuario->email = "mljinformatica@gmail.com";

var_dump($usuario);
echo "O usuário {$usuario->nome} de e-mail {$usuario->email} está ativo<br><br>";

$usuario->setNome("João");
$usuario->setSobrenome("<b>de Deus<b>");
$usuario->setEmail("jojo");

if(!$usuario->setEmail("jojo")){
    echo "<p style='color:red'>o email {$usuario->getEmail()} não é válido!</p><br>";
        
}else{
    echo "Novo usuário é {$usuario->getNome()} {$usuario->getSobrenome()} e seu email é {$usuario->getEmail()}";
}

