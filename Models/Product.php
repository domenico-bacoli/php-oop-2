<?php

class Product {
    public $name;
    public $price;
    public $brand;
    public $image;
    public $availability;
    public $productCode;
    public $description;
    public $category;
    

    function __construct(string $name, int $price, string $brand, string $image, int $availability, string $productCode, string $description, string $category) {
        $this->name = $name;
        $this->price = $price;
        $this->brand = $brand;
        $this->image = $image;
        $this->availability = $availability;
        $this->productCode = $productCode;
        $this->description = $description;
        $this->category = $category;

    }
}
?>