<?php
require_once __DIR__ . "/product.php";
class Food extends Product{
  private $brand;
  private $ingredient;

  public function __construct(string $name, string $image, float $price, Category $category ){
    parent::__construct($name,$image,$price,$category);
  }

  public function setBrand($brand)
  {
    $this -> brand = $brand;
  }

  public function getBrand()
  {
    return $this -> brand;
  }

  public function setIngredient($ingredient)
  {
    $this -> ingredient = $ingredient;
  }

  public function getIngredient()
  {
    return $this -> ingredient;
  }
}
?>