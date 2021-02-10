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
          include './classes/Frutas.php';
          
//          $banana = new Frutas();
//          $banana->setCor("Amarelo");
//          $banana->setNome("Banana");
//          $banana->setPeso("3,5kg");
        
          $laranja = new Frutas("verde", "laranja","3kg");
          
          echo "A fruta {$laranja->getNome()} é da cor "
          . "{$laranja->getCor()} e tem o peso de "
          . "{$laranja->getPeso()}";
        ?>
    </body>
</html>
