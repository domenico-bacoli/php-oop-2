<?php 
class KennelProduct extends Product {
    public $material;
    public $weight;

    function __construct(string $name, int $price, string $brand, string $image, int $availability, string $productCode, string $description, string $category, string $material, int $weight){
        
        //
        parent::__construct($name, $price, $brand, $image, $availability, $productCode, $description, $category);

        $this->material = $material;
        $this->weight = $weight;
    }

}
?>