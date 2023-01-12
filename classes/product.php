<?php

require_once __DIR__ . "/../traits/name.php";
class Product{
  use name;
  
  private $image;
  private $price;
  private $category;


  public function __construct(string $name, string $image,float $price, Category $category)
  {
    $this->name=$name;
    $this->image=$image;
    $this->price=$price;
    $this->category=$category;

  }
 
  public function getImage()
  {
    return $this->image;
  }
  public function getPrice()
  {
    return $this->price;
  }
  public function getCategory()
  {
    return $this->category;
  }
}






