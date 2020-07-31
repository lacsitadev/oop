<? php

class Ape extends Animal{
    public $yell = "Auooo...";
    
    function get_yell($yell){
        $this->yell=$yell;
    }
    function yell(){
        return $this->yell;
    }
    
    }
?>