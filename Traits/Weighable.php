<?php

trait Weighable {

    protected $weight;

    public function setWeight($weight){
        $this->weight = $weight;
    } 
    
    public function getWeight() {
        return $this->weight;
    }
}

?>
