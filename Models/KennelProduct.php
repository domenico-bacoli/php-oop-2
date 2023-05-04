<?php 
class KennelProduct extends Product {
    public $category;
    public static $type = 'Kennel';

    function __construct(string $name, int $price, string $brand, string $image, int $availability, string $productCode, string $description, string $category){
        
        //
        parent::__construct($name, $price, $brand, $image, $availability, $productCode, $description);

        $this->category = $category;
    }
}
?>