<?php

class GameProduct extends Product {
    public $material;

    function __construct(string $name, int $price, string $brand, string $image, int $availability, string $productCode, string $description, string $category, $material) {
        
        // utilizzo il costruttore del genitore
        parent::__construct($name, $price, $brand, $image, $availability, $productCode, $description, $category);

        //memorizzo le nuove variabili d'istanza
        $this->material = $material;
    }
}

?>