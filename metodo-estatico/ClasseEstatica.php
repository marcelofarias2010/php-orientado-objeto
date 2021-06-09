<?php

class ClasseEstatica {
    //put your code here
    public static $value = "3.14159";


    public function welcome(){
        return self::$value;
    }
     
}
