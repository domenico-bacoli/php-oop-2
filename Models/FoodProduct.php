<?php

class FoodProduct extends Product {
    public $expirationDate;

    function __construct(string $name, int $price, string $brand, string $image, int $availability, string $productCode, string $description, string $category, string $expirationDate) {

        // utilizzo il costruttore del genitore
        parent::__construct($name, $price, $brand, $image, $availability, $productCode, $description, $category);

        //memorizzo le nuove variabili d'istanza
        $this->expirationDate = $expirationDate;
    }
}
?>