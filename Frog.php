<?php

class Frog extends animal{
    public $lompat = "hop hop";

    function __construct($name){
        $this -> name = $name;
    }

    public function jump(){
        echo $this -> lompat;
    }
  
}

?>