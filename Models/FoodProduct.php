<?php

class FoodProduct extends Product {
    public $category;
    public $expirationDate;
    public static $type = 'food';

    function __construct(string $name, int $price, string $brand, string $image, int $availability, string $productCode, string $description, string $category, string $expirationDate) {

        // utilizzo il costruttore del genitore
        parent::__construct($name, $price, $brand, $image, $availability, $productCode, $description);

        //memorizzo le nuove variabili d'istanza
        $this->category = $category;
        $this->expirationDate = $expirationDate;
    }
}
?>