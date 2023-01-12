<?php
require_once __DIR__ ."/db.php";
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
<h1 class="text-bg-warning p-3">PET STORE</h1>
    <div class="container">
      <div class=" row ">
        <?php foreach($products as $product){?>
         <div class="col-4">
              <div class="card">
                 <img src="<?php echo $product->getImage() ?>" class="card-img-top" alt="<?php echo $product->getName() ?>">
                 <div class="card-body">
                    <div class="fs-2"><?php echo $product->getCategory()->getIcon() ?></div>
                     <h5 class="card-title"><?= $product-> getName(); ?></h5>
                     <p class="card-text"><strong>Prezzo:</strong><?php echo $product->getPrice(); ?> €</p>
                     <?php if( method_exists($product, "getBrand")) { ?>
                     <p><strong class="mr-3">Marca:</strong><?php echo $product->getBrand() ?></p>
                     <?php }?>
                     <?php if( method_exists($product, "getIngredient")) { ?>
                     <p><strong class="mr-3">Ingredienti:</strong><?php echo $product->getIngredient() ?></p>
                     <?php }?>
                     <?php if( method_exists($product, "getSize")) { ?>
                     <p><strong class="mr-3">Dimensioni:</strong><?php echo $product->getSize() ?> cm</p>
                     <?php }?>
                     <?php if( method_exists($product, "getSize")) { ?>
                     <p><strong class="mr-3">Materiale:</strong><?php echo $product->getMaterial() ?></p>
                     <?php }?>
                     <a href="#" class="btn btn-dark">ACQUISTA</a>
                 </div>
              </div>
         </div>
         <?php }?>
      </div>
  </div> 
</body>
</html>