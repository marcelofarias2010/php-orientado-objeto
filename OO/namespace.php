<?php

require __DIR__."/classes/App/Template.php";
require __DIR__."/classes/Web/Template.php";

$appTemplate = new App\Template();
$webTemplate = new Web\Template();

var_dump($appTemplate, $webTemplate);

use App\Template;
use Web\Template as webTamplate;

$appTemplate2 = new Template();
$webTemplate2 = new webTamplate();

var_dump($appTemplate, $webTemplate);