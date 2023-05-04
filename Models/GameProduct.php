<?php

class GameProduct extends Product {
    public $material;

    function __construct(string $name, int $price, string $brand, string $image, int $availability, string $productCode, string $description, string $category, $material) {
        
        parent::__construct($name, $price, $brand, $image, $availability, $productCode, $description, $category);

        $this->material = $material;
    }
}

?>