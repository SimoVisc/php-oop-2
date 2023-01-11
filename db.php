<?php
require_once __DIR__ ."/classes/product.php";
require_once __DIR__ ."/classes/food.php";
require_once __DIR__ ."/classes/toy.php";
require_once __DIR__ ."/classes/kennel.php";
require_once __DIR__ ."/classes/category.php";

// categorie
$dog= new Category("cane","<i class=\"fa-solid fa-dog\"></i>" );
$cat= new Category("gatto","<i class=\"fa-solid fa-cat\"></i>" );

// prodotti
$food = new Food("DOGGY SNACK", "https://www.isoladeitesori.it/dw/image/v2/BGRZ_PRD/on/demandware.static/-/Sites-it-master-catalog/default/dw51dd5f69/idt/138319_1.jpg?sw=800&sh=800", 3.50,$dog);
$food-> setBrand("NaturalPet");
$food-> setIngredient("Manzo");
$toy= new Toy("PELUCHES", "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg?v=1757378265",5,$cat);
$toy-> setSize("8");
$toy-> setMaterial("Poliestere");
$kennel= new Kennel("CUCCIA DA ESTERNO", "https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/spike/comfort/2/400/55516_pla_spike_comfort_fg_8345_2.jpg",75,$dog);
$kennel-> setSize("72");
$kennel-> setMaterial("Legno");

$products= [
    $food,
    $toy,
    $kennel
];


?>