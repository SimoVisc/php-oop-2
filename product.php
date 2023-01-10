<?php
require_once __DIR__ ."/classes/food.php";
require_once __DIR__ ."/classes/toy.php";
require_once __DIR__ ."/classes/kennel.php";

$products =[
  new Food("Snack", ["cane"], 10),
  new Food("Croccantini",["gatto"], 7),
  new Toy("Peluches", ["cane","gatto"], 6),
  new Kennel("Cuccia", ["cane","gatto"], 20),
];

var_dump($products);

?>
