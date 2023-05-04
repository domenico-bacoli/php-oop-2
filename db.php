<?php

require_once './Models/Product.php';
require_once './Models/FoodProduct.php';
require_once './Models/GameProduct.php';
require_once './Models/KennelProduct.php';

$frisbee = new GameProduct("Frisbee", 4, "For Fan Pets", "https://www.moby-dick.it/image/cache/data/Foto%20Prodotti/Cani/giochi/for-fan-pets-frisbee-avengers-capitan-america-licenza-ufficiale-marvel-600x600.jpg", 10, "123456", "lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt", "cane"); 
$mechanicalMouse = new GameProduct("Topo Meccanico", 6, "For Fan Pets", "https://www.moby-dick.it/image/cache/data/Foto%20Prodotti/Cani/giochi/for-fan-pets-frisbee-avengers-capitan-america-licenza-ufficiale-marvel-600x600.jpg", 8, "123456", "lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt", "gatto");
$croquettes = new FoodProduct("Crocchette per cane", 5, "Miglior Cane", "https://www.moby-dick.it/image/cache/data/Foto%20Prodotti/Cani/giochi/for-fan-pets-frisbee-avengers-capitan-america-licenza-ufficiale-marvel-600x600.jpg", 6, "123456", "lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt", "cane", "28-06-2023");
$tidbits = new FoodProduct("Crocchette per cane", 5, "Miglior Gatto", "https://www.moby-dick.it/image/cache/data/Foto%20Prodotti/Cani/giochi/for-fan-pets-frisbee-avengers-capitan-america-licenza-ufficiale-marvel-600x600.jpg", 8, "123456", "lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt", "gatto", "28-06-2023");


$products = [
    $frisbee,
    $mechanicalMouse,
    $croquettes,
    $tidbits
];

?>