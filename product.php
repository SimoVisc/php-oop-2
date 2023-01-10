<?php
require_once __DIR__ ."/category.php";
require_once __DIR__ ."/classes/food.php";
require_once __DIR__ ."/classes/toy.php";
require_once __DIR__ ."/classes/kennel.php";

$cane= new Category("cane");
$gatto= new Category("gatto");

$products =[
  new Food("Snack", [$cane], 10),
  new Food("Croccantini",[$gatto], 7),
  new Toy("Peluches", [$gatto], 6),
  new Kennel("Cuccia", [$cane], 20),
];

// var_dump($products);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Php OOP</title>
</head>
<body>
   <h1 class="text-bg-warning p-3">PET STORE</h1> 
   <div class=" d-flex ">
   <div class="card border border-dark " style="width: 18rem;">
   <?php foreach($products as $product) { ?>
        <div class="card-body">
            <h5 class="card-title"><?= $product-> name; ?></h5>
            <p class="card-text">categoria:</p>
            <ul> 
            <?php foreach($product-> categories as $category ) { ?>
                <li><?php echo ucfirst($category->name); ?></li>
            <?php } ?>
            </ul> 
            <p class="card-text">Prezzo:<?php echo $product-> price; ?> €</p>
            <a href="#" class="btn btn-dark">BUY</a>
        </div>
  <?php } ?>
  </div>
  </div>
</body>
</html>