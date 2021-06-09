<?php

require __DIR__."/Dominio.php";
require __DIR__."/Subdominio.php";

$dominio = new Subdominio();

echo $dominio->websiteName;
