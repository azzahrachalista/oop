<?php

class Ape extends animal{
    public $suara = "Auooo";

    function __construct($name){
        $this -> name = $name;
    }

    public function yell(){
        echo $this -> suara;
    }
}



?>