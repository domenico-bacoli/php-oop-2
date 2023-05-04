<?php

require_once './Models/Product.php';
require_once './Models/FoodProduct.php';
require_once './Models/GameProduct.php';
require_once './Models/KennelProduct.php';

$frisbee = new GameProduct("Frisbee Avengers", 4, "For Fan Pets", "https://www.moby-dick.it/image/cache/data/Foto%20Prodotti/Cani/giochi/for-fan-pets-frisbee-avengers-capitan-america-licenza-ufficiale-marvel-600x600.jpg", 10, "123456", "lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt", "Cane"); 
$mechanicalMouse = new GameProduct("Topo Meccanico", 6, "For Fan Pets", "https://www.moby-dick.it/image/cache/data/Foto%20Prodotti/Gatti/giochi/camon-gioco-topo-meccanico-600x600.jpg", 8, "123456", "lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt", "Gatto");
$croquettes = new FoodProduct("Crocchette per cane", 12, "Miglior Cane", "https://media.franzysonline.it/media/catalog/product/cache/0b83d9404a26713075055d01f5be6584/m/i/miglior-cane-crocchette-wellness-system-manzo-64560-2.jpg", 6, "123456", "lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt", "Cane", "28-06-2023");
$tidbits = new FoodProduct("Crocchette per gatto", 5, "Miglior Gatto", "https://www.isoladeitesori.it/dw/image/v2/BGRZ_PRD/on/demandware.static/-/Sites-it-master-catalog/default/dw58962b8c/idt/503150_2.jpg?sw=1000&sh=1000", 8, "123456", "lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt", "Gatto", "28-06-2023");


$products = [
    $frisbee,
    $mechanicalMouse,
    $croquettes,
    $tidbits
];

?>