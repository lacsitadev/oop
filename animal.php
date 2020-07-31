<?php

class Animal{
    public $name;
    public $legs = 2;
    public $cold_blooded = "false";

    function set_name($name) {
        $this->name = $name;
    }
      
 	function get_name() {
        return $this->name;
    }

    function set_legs($legs){
        $this->legs =$legs;
    }
    function get_legs(){
        return $this->legs;
    }
    function set_cold_blooded($cold_blooded){
        $this->cold_blooded=$cold_blooded;
    }
    function get_cold_blooded(){
        return $this->cold_blooded;
    }
}

?>