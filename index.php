<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
          require './classes/Frutas.php';
          require './classes/Morango.php';
   
//          $banana = new Frutas();
//          $banana->setCor("Amarelo");
//          $banana->setNome("Banana");
//          $banana->setPeso("3,5kg");
        
          $laranja = new Frutas("Laranja", "Amarelo");
//          $laranja->setNome("Laranja");
//          $laranja->setCor("Amarelo");
          $laranja->setPeso("5kg");
          
          echo "A fruta {$laranja->getNome()} é da cor "
          . "{$laranja->getCor()} e tem o peso de "
          . "{$laranja->getPeso()} <br>";
          
          $morango = new Morango("Morango","Vermelho","grande");
//          $morango->setNome("Morango");
//          $morango->setCor("Vermelho");
          $morango->setPeso("15kg");
          echo "A fruta {$morango->getNome()} é da cor "
          . "{$morango->getCor()} e tem o peso de "
          . "{$morango->getPeso()} e o tamnho é "
          . "{$morango->tamanho}<br>";
          $morango->mesagem();
         
        ?>
    </body>
</html>
