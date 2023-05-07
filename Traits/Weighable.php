<?php

trait Weighable {

    protected $weight;

    public function setWeight($weight){ 
        if($weight > 0) {
            $this->weight = $weight;  
        } else {
            throw new Exception("Il peso deve essere maggiore di 0");
        }
    } 
    
    public function getWeight() {
        return $this->weight;
    }
}

?>
