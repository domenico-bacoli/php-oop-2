<?php
    require_once __DIR__ . '/../Traits/Weighable.php';
class GameProduct extends Product {
    use Weighable;
    public $material;

    function __construct(string $name, int $price, string $brand, string $image, int $availability, string $productCode, string $description, string $category, $material) {
        
        // utilizzo il costruttore del genitore
        parent::__construct($name, $price, $brand, $image, $availability, $productCode, $description, $category);

        //memorizzo le nuove variabili d'istanza
        $this->material = $material;
    }
}

?>