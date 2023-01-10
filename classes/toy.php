<?php
 class Toy{
  public $name;
  public $category;
  public $price;
  public $size;
  public $material;

  public function __construct(string $_name , array $_category , int $_price){
    $this -> name = $_name;
    $this -> category = $_category;
    $this -> price = $_price;
  }
  
  public function getInfo(){
    return "Dimensioni: {$this->size} e materiale: {$this->material}";
  }
}

?>