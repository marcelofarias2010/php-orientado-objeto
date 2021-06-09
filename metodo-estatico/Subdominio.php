<?php

class Subdominio extends Dominio{
    //put your code here
    public $websiteName;
    
    public function __construct() {
        $this->websiteName = parent::getWebsiteName();
    }
        
}
