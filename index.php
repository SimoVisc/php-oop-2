<?php
require_once __DIR__ ."/classes/product.php";
require_once __DIR__ ."/classes/food.php";
require_once __DIR__ ."/classes/toy.php";
require_once __DIR__ ."/classes/kennel.php";
require_once __DIR__ ."/classes/category.php";

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Php OOP</title>
</head>
<body>
    
</body>
</html>