<?php
 class Kennel{
  public $name;
  public $category;
  public $price;
  public $size;
  public $brand;

  public function __construct(string $_name , array $_category , int $_price){
    $this -> name = $_name;
    $this -> category = $_category;
    $this -> price = $_price;
  }
}

?>