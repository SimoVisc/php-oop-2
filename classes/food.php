<?php
 class Food{
  public $name;
  public $category;
  public $price;
  public $ingredients;
  public $brand;

  public function __construct(string $_name , array $_category , int $_price){
    $this -> name = $_name;
    $this -> category = $_category;
    $this -> price = $_price;
  }
}

?>