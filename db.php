<?php

require_once './Models/Product.php';
require_once './Models/FoodProduct.php';
require_once './Models/GameProduct.php';
require_once './Models/KennelProduct.php';

$frisbee = new GameProduct("Frisbee Avengers", 4, "For Fan Pets", "https://www.moby-dick.it/image/cache/data/Foto%20Prodotti/Cani/giochi/for-fan-pets-frisbee-avengers-capitan-america-licenza-ufficiale-marvel-600x600.jpg", 10, "123456", "lorem ipsum dolor sit amet consectetur", "Cane", "Plastica"); 
$mechanicalMouse = new GameProduct("Topo Meccanico", 6, "For Fan Pets", "https://www.moby-dick.it/image/cache/data/Foto%20Prodotti/Gatti/giochi/camon-gioco-topo-meccanico-600x600.jpg", 8, "123456", "lorem ipsum dolor sit amet consectetur", "Gatto", "Plastica");
$croquettes = new FoodProduct("Crocchette per cane", 12, "Miglior Cane", "https://media.franzysonline.it/media/catalog/product/cache/0b83d9404a26713075055d01f5be6584/m/i/miglior-cane-crocchette-wellness-system-manzo-64560-2.jpg", 6, "123456", "lorem ipsum dolor sit amet consectetur", "Cane", "28-06-2023");
$tidbits = new FoodProduct("Crocchette per gatto", 5, "Miglior Gatto", "https://www.isoladeitesori.it/dw/image/v2/BGRZ_PRD/on/demandware.static/-/Sites-it-master-catalog/default/dw58962b8c/idt/503150_2.jpg?sw=1000&sh=1000", 8, "123456", "lorem ipsum dolor sit amet consectetur", "Gatto", "28-06-2023");
$kennelDog = new KennelProduct("Cuccia per cani", 50, "Spike", "https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/spike/classic/6/800/23637_pla_hundehuette_spike_classic_m_fg_8241_6.jpg", 2, "12345", "lorem ipsum dolor sit amet consectetur", "Cani", "Legno", 20);
$KennelCat = new KennelProduct("Cuccia per Gatti", 50, "PawHut", "https://img.aosomcdn.com/thumbnail/100/n0/product/2022/03/28/jE498a17fd03e5e53.jpg.webp", 1, "12345", "lorem ipsum dolor sit amet consectetur", "Gatti", "Legno", 20);


$products = [
    $frisbee,
    $mechanicalMouse,
    $croquettes,
    $tidbits,
    $kennelDog,
    $KennelCat,
    $frisbee,
    $kennelDog
];

?>