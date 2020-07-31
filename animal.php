<?php

class animal{

    public $legs = 2;
    public $cold_blooded = false;

    public function set_name($name){
        $this->name = $name;
    }
    public function get_name(){
        return $this -> name;
    }
    public function set_legs($legs){
        $this->legs = $legs;
    }
    public function legs(){
        return $this -> legs;
    }
    public function cold_blooded(){
        return $this -> cold_blooded;
    }
    
}


?>